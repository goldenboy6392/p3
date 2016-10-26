<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    public function index()
    {
    	return \view('homepage.show');
    }
}
