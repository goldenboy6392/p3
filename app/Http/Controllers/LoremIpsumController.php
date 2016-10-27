<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;

class LoremIpsumController extends Controller
{
    public function index(Request $request)
    {
    		$lipsum = new \joshtronic\LoremIpsum();
    		$number=$request->input('number');
    		$error="";
			if(isset($_POST['submit'])){ //check if form was submitted
				
				if(!is_numeric($number) || $number < 0 ||strlen($number)>2){
					$error = "<p class='error'>That is not a valid input. Please try again.</p>";
				}
				else{
					$error="";
				}
			}	
        return \view('loremipsum.show')->with('lipsum',$lipsum)->with('number',$number)->with('error',$error);
    }

} # end of class