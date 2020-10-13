<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function getIndex(){
        return view ('pages.welcome');

    }

    public function getContact(){
        return view ('pages.contact');
    }

    public function getaboutus(){
        return view ('pages.aboutus');
    }

    public function getfilms(){
        return view ('pages.films');
    }

    public function gettv(){
        return view ('pages.tv');
    }

    public function getcartoon(){
        return view ('pages.cartoon');
    }

    public function getcole(){
        return view ('pages.cole');
    }
}
