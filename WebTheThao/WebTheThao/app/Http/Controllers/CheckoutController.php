<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class CheckoutController extends Controller
{
    public function login(){
        return view('pages.checkout.login');
    }
}
