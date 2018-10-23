<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver;

class PagesController extends Controller
{
    function home () {
        return view('pages.home');
    }

    function about () {
        return view('pages.about');
    }

    function contact () {
        return view('pages.contact');
    }

    function store (Request $request) {
        $name = $request ->name ;
        //echo $name ;
        return redirect() -> route('thanks', ['name' => $name]);
    }

    function thanks ($name , Request $request) {
        //dd($name);
        return view('pages.thankyou') -> with(compact('name'));
    }



}
