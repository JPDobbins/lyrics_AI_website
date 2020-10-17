<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepageController extends Controller
{
    //
    function loadView() {
        return view('/layouts/homepage');
    }
}
