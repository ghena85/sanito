<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use Validator;

class AuthController extends Controller
{
    public function login(Request $request) {


        if($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|exists:accounts,email',
                'password' => 'required|min:8'
            ], [
                'email.required' => __('Почта обязательна!'),
                'email.email' => __('Неккоректная почта!'),
                'email.exists' => __('Пользователь с такой почтой отсутствует!'),
                'password.required' => __('Пароль обязателен'),
                'password.min' => __('Пароль должен состоять минимум из 8 символов')
            ]);

            if($validator->fails()) {
                return back()->withErrors($validator->errors());
            }

            if (auth('account')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('account.home');
            }
            else {
                return back()->withErrors($validator->errors());
            }
        }


        return view('auth.login');
    }

    public function registration(Request $request) {


        if($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:accounts,email',
                'last_name' => 'required',
                'password' => 'required|min:8'
            ], [
                'name.required' => __('Имя обязательное!'),
                'email.required' => __('Почта обязательна!'),
                'email.email' => __('Некорекктная почта!'),
                'email.unique' => __('Данная почта уже занята!'),
                'last_name.required' => __('Фамилия обязательна!'),
                'password.required' => __('Пароль обязателен!'),
                'password.min' => __('Пароль должен состоять минимум из 8 символов!')
            ]);

            if($validator->fails()) {

                return back()->withErrors($validator->errors());
            }


            $account = new Account();
            $account->name = $request->name;
            $account->email = $request->email;
            $account->last_name = $request->last_name;
            $account->password = bcrypt($request->password);


            $account->save();

            auth('account')->loginUsingId($account->id);

            return redirect()->route('account.home');
        }

        return view('auth.registration');
    }

    public function rememberPassword(Request $request) {



        if($request->isMethod('post')) {
            $account = Account::where('email', $request->email)->firstOrFail();

            $password = str_random(8);

            $account->password = bcrypt($password);
            $account->save();

            \Mail::send('mail.remember-password-mail', compact('password'), function ($message) use($account) {
                $message->from('test@test.com');

                $message->to($account->email)->subject(__('Восстановление пароля'));
            });

            return redirect()->back()->with('message', 'Пароль отправлен на почту!');
        }


        return view('remember-password');
    }

    public function logout() {
        auth('account')->logout();
        return redirect()->route('home');
    }
}
