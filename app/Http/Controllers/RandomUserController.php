<?php

namespace P3\Http\Controllers;

use Illuminate\Http\Request;

class RandomUserController extends Controller
{
    public function index(Request $request){
		$number=$request->input('number');
    	$userinfo="";
    	$error="";	
    	if(isset($_POST['submit'])){
		if(!is_numeric($number) || $number < 0 || strlen($number)>2){
					$error ="<p class='error'>That is not a valid input. Please try again.</p>";
				}
					else{
    				$userinfo="";
					$gen = new \RandomUser\Generator();
					for ($i = 1; $i <= $number; $i++) {
						$user = $gen->getUser();
						$first = ucwords($user->getFirstName());
						$last = ucwords($user->getLastName());
						$birthday = $user->getDateofBirth();
						$gender = ucwords($user->getgender());
						$street = ucwords($user->getstreetAddress());
						$city = ucwords($user->getCity());
						$state = ucwords($user->getState());
						$zip = $user->getZip();
						$email = $user->getemail();
						$photo = $user->getpicture();
						$country= $user->getNationality();
						$temp[$i] = "<br>"."<div class=user><img class=userphoto src=$photo>"." "."<ul class=userinfo><li><strong>Name: </strong>".$first." ".$last
							."</li>"."<br><li><strong>Gender: </strong>".$gender."</li>"."<br><li><strong>Birthday: </strong>".$birthday."</li>"."<br><li><strong>Address: </strong>".$street.", ".$city
							.", ".$state.", ".$zip." ".$country."</li>"."<br><li><strong>Email: </strong>".$email."</li></ul></div>";
						$userinfo=$temp[1];
						for ($j = 2; $j <= sizeof($temp); $j++){
							$userinfo=$userinfo. $temp[$j];
						}
					}
				}
			}
		return \view('randomuser.show')->with('userinfo',$userinfo)->with('error',$error);

    }
    public function show(){
    }
}
