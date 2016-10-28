<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;

class LoremIpsumController extends Controller
{
    public function index()
    {
		$lipsum = new \joshtronic\LoremIpsum();
    	$number="";
        return \view('loremipsum.show')->with('lipsum',$lipsum)->with('number',$number);
    }
    public function store(Request $request)
    {
    	$this->validate($request, [
        	'number' => 'required|integer|max:99|min:1',
    	]);
    	    $lipsum = new \joshtronic\LoremIpsum();
    		$number=$request->input('number');	
        return \view('loremipsum.show')->with('lipsum',$lipsum)->with('number',$number);
    }

} # end of class