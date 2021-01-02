<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontsitecontroller extends Controller
{
    public function showHome(){
        return view('frontsite.home');
    }

    public function showAbout(){
        return view('frontsite.about');
    }

   public function showjewellery(){
        return view('frontsite.jewellery');
    }

   public function showcontact(){
        return view('frontsite.contact');
    }
}
