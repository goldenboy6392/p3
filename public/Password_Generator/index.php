<?php session_start();
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>P2 Password Generator</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta charset="utf-8">
<link href='//netdna.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/../css/main.css">
</head>

<body>
	<div class="container">
		<h2>Secure Password Generator</h2>
		<h4>Inspired by the xkcd comic 936: <a href="http://xkcd.com/936/"> Password Strength</a></h4>
		<br>
		<div class="pw">
			<p class="password">
				<?php
					if(isset($_SESSION['password'])){
						$password=$_SESSION['password'];	
					}
					else{
						$password="Lima-Jaguar-Mike-Echo";
					}
					echo $password;
				 ?>
			 </p>
		</div>
		<p class="isnumber">
			<?php
				if(isset($_SESSION['isnumber'])){
					$isnumber=$_SESSION['isnumber'];	
				}
			else{
				$isnumber='';
			}
			
			echo $isnumber;
			session_unset();
			?>
		</p>
		<div class="form-group">
			<form method ="POST" action="password.php">
					<label for="number-of-words">How many Words?</label>
					<input maxlength=1 class="text" type="text" name="number-of-words" id="number-of-words" value="4">  (Maximum of <strong><ins>9</ins></strong>)
					<br>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="number" checked>Include a number
						</label>
						<br>
						<label style="padding-right:7px;">
							<input type="checkbox" name="symbol" checked>Include a symbol
						</label>
					</div>

				<input type='submit' name='submit' class='btn btn-default' value='Generate A New Password'>
				
			</form>
		</div>

		<img class='xkcd' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
	</div>
</body>
</html>