<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SiteController extends Controller
{

    public function getIndex(Request $request)
    {

        return view('index');
    }
}
