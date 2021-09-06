<?php

namespace App\Http\Controllers;

use App\About;
use App\Certificate;
use App\Http\Requests\ContactFormRequest;
use App\Page;
use App\Partner;
use App\Team;
use Illuminate\Http\Request;

class PageController extends AppController
{
    /**
     * Contacte
     *
     * @return \Illuminate\View\View
     */
    public function contacts(Request $request)
    {
        $page        = Page::find(3);
        $activeMenu  = $page->id;
        // dd($page->toArray());
        return view('contact.index',compact('page','activeMenu'));
    }

    public function sendContactForm(ContactFormRequest $request)
    {
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['msg'] = $request->msg;
        
        send(env('TO_EMAIL'),'Feedback Mesaj' ,$data, 'contact');

        return redirect()->back()->with('message', 'Transmis cu success.');
    }

    /**
     * About Us
     *
     * @return \Illuminate\View\View
     */
    public function aboutUs()
    {
        $page         = Page::find(2);
        $aboutHero    = About::find(3);
        $aboutDir     = About::find(2);
        return view('about.index',compact('page','aboutHero','aboutDir'));
    }

    /**
     * Info/Detail Page
     *
     * @return \Illuminate\View\View
     */
    public function detail($slug)
    {
        $page             = Page::where('slug',$slug)->first();
        if(empty($page)) return abort(404);

        return view('page.detail',compact('page'));
    }


    /*
     * Swith lang
     */
    public function setLocaleLanguage(Request $request, $lang)
    {
        $referer = \Redirect::back()->getTargetUrl();
        $parse_url = parse_url($referer, PHP_URL_PATH);

        $segments = explode('/', $parse_url);

        if (in_array($segments[1], ['ru', 'ro', 'en'])) {

            unset($segments[1]);
        }


        if ($lang != \App\Http\Middleware\LocaleMiddleware::$mainLanguage) {

            array_splice($segments, 1, 0, $lang);
        }

        $url = \Request::root() . implode("/", $segments);

        if (parse_url($referer, PHP_URL_QUERY)) {
            $url = $url . '?' . parse_url($referer, PHP_URL_QUERY);
        }

//        dd($url);

        return redirect($url);
    }

}
