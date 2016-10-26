<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;

class RandomUserController extends Controller
{
    public function index()
    {
    	return \view('randomuser.show');
    }
}
