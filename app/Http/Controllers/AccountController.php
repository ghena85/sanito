<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function index()
    {

        $user = auth('account')->user();

        return view('account.index', compact( 'user'));
    }
}
