<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function getCities(Request $request) {
        $cities = City::where('country_id', $request->id)->get();

        return $cities;
    }

    public function home() {

        $countries = Country::all();

        $cities = City::where('country_id', $countries->first()->id)->get();

        $account = auth('account')->user();

        if($account->country_id) {
            $cities = City::where('country_id', $account->country_id)->get();
        }

        return view('account.home', compact('countries', 'cities', 'account'));
    }

    public function saveInfoAccount(Request $request) {

        $account = auth('account')->user();

        $account->name = $request->name;
        $account->last_name = $request->last_name;
        $account->email = $request->email;
        $account->phone = $request->phone;

        $account->save();

        return redirect()->back()->with('message', 'Success save!');

    }

    public function changePassword(Request $request) {

        $account = auth('account')->user();

        if (\Hash::check($request->password, $account->password) && $request->new_password == $request->repeat_password) {
            $account->password = bcrypt($request->new_password);
            $account->save();

            return redirect()->back()->with('message', 'Success change password!');
        }

        return redirect()->back()->with('error', 'Don`t change password! Incorrect password!');

    }

    public function saveAddress(Request $request) {




    }
}
