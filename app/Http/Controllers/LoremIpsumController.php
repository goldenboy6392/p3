<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;

class LoremIpsumController extends Controller
{

    /**
    * Responds to requests to GET /LorumIpsum
    */
    public function index()
    {
        return \view('loremipsum.show');
    }

} # end of class