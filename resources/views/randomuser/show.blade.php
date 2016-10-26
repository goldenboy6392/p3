<!DOCTYPE html>
<html lang="en">
<head>
<title>Random User Generator</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta charset="utf-8">
<link href='//netdna.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/../css/main.css">
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>

</head>

<body>
	<div class="container">
		<h2>Random User Data</h2>
		<br>
		<h4>Generate random user data</a></h4>
		<div class="form-group">
			<form method ='POST'>
			{{ csrf_field() }}
					<label>How many users do you want to generate?</label><br>
					<input maxlength=3 class="text" type="text" name="number" id="number" value="5">  (Maximum of <strong><ins>99</ins></strong>)<br><br>
					<input type='submit' name='submit' class='btn btn-default' value='Generate New User Data'>
			</form> <br>
			<table><?php
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
							echo("<br>"."<div class=user><img src=$photo></div>"."   "."<strong>Name: </strong>".$first." ".$last." "."<br><strong>Gender: </strong>".$gender." "."<br><strong>Address: </strong>".$street.", ".$city.", ".$state.", ".$zip." "."<br><strong>Email: </strong>".$email."<br>");
						}
					}
				}
			?>
			</table>	
		</div>
	</div>
</body>
</html>