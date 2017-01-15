<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     *
     */
    public function home()
    {
        //
        return view('home');
    }

    /**
     * About Page.
     *
     */
    public function about()
    {
        //
        return view('about');
    }

    /**
     * Contact Page
     *
     */
    public function contact()
    {
        //
        return view('contact');
    }


}
