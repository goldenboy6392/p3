<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Random User Generator</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset="utf-8">
		<link href='//netdna.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/css/main.css">
	</head>
	<body>
		<nav id="main-menu">
			<h3><strong>Navigation</strong></h3>
		    <ul>
		        <li><a href="/">Home</a></li>
		        <li><a href="/LoremIpsum">Lorem Ipsem Generator</a></li>
		    </ul>
		</nav>
		<div class="container">
			<h2 class="title">Random User Data</h2>
			<br>
			<h4>Generate random user data</a></h4>
			<div class="form-group">
				<form method ='POST'>
					{{ csrf_field() }}
					<label>How many users do you want to generate?</label><br>
					<input maxlength=3 class="text" type="text" name="number" id="number" value="5">  (Maximum of <strong><ins>99</ins></strong>)<br><br>
					<input type='submit' name='submit' class='btn btn-default' value='Generate New User Data'>
				</form> <br>
				<div class=generatedusers>
					<?php
						function checkNumlength(){
							$length=strlen($_POST['number']);
							if ($length > 2 ){
								return FALSE;
							}
							else{
								return TRUE;
							}
						}
						if(isset($_POST['submit'])){ //check if form was submitted
							$number = $_POST['number'];
							if(!is_numeric($number) || !checkNumlength() || $number < 0 ){
								echo "That is not a valid input. Please try again.";
							}
							elseif($number == 0){
								echo "";
							}
							else{				
								$gen = new \RandomUser\Generator();
								for ($i = 1; $i <= $number; $i++) {
									$user = $gen->getUser();
									$first = ucwords($user->getFirstName());
									$last = ucwords($user->getLastName());
									$gender = ucwords($user->getgender());
									$street = ucwords($user->getstreetAddress());
									$city = ucwords($user->getCity());
									$state = ucwords($user->getState());
									$zip = $user->getZip();
									$email = $user->getemail();
									$photo = $user->getpicture();
									$country= $user->getNationality();
									echo("<br>"."<div class=user><img class=userphoto src=$photo>"." "."<ul class=userinfo><li><strong>Name: </strong>".$first." ".$last
										."</li>"."<br><li><strong>Gender: </strong>".$gender."</li>"."<br><li><strong>Address: </strong>".$street.", ".$city
										.", ".$state.", ".$zip." ".$country."</li>"."<br><li><strong>Email: </strong>".$email."</li><br></ul></div>");
								}
							}
						}
					?>
				</div>
			</div>
		</div>
	</body>
</html>