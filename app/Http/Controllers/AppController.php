<?php

namespace App\Http\Controllers;

use App\Services\NavMenuService;
use App\Vars;
use Illuminate\Support\Facades\View;

class AppController extends Controller
{
    public $vars;
    public function __construct()
    {
        $navService = new NavMenuService();
        $menu = $navService->getNav();
        View::share('footerMenu', $menu['footerMenu']);
        View::share('navMenu', $menu['navMenu']);
        View::share('categories', $menu['categories']);
        // vars
        $this->vars = Vars::getList();
        View::share('vars',$this->vars);

    }


}
