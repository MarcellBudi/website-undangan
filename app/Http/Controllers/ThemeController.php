<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function balinese()
    {
        return view('themes.balinese');
    }
}
