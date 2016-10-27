<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Project 3 Lorem Ipsum Generator</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset="utf-8">
		<link href='//netdna.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css' rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/../css/main.css">
	</head>
	<body>		
		<nav id="main-menu">
			<h3><strong>Navigation</strong></h3>
		    <ul>
		        <li><a href="/">Home</a></li>
		        <li><a href="/RandomUser">Random User Generator</a></li>
		    </ul>
		</nav>
		<div class="container">
			<h2 class="title">Lorem Ipsum</h2>
			<br>
			<h4>A Filler-Text Generator</a></h4>
			<div class="form-group">
				<form method ='POST'>
					{{ csrf_field() }}
					<label>How many paragraphs do you want to generate?</label><br>
					<input maxlength=3 class="text" type="text" name="number" id="number" value="5">  (Maximum of <strong><ins>99</ins></strong>)<br><br>
					<input type='submit' name='submit' class='btn btn-default' value='Generate New Filler Text'>
				</form> <br>
				<div class="loremipsum">
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
							$lipsum = new joshtronic\LoremIpsum();
							$number = $_POST['number'];
							if(!is_numeric($number) || !checkNumlength() || $number < 0 ){
								echo "That is not a valid input. Please try again.";
							}
							elseif($number == 0){
								echo "";
							}
							else{
								header('Location:');
								echo $lipsum->paragraphs($number,'p');
							}
						}	
					?>
				</div>
			</div>
		</div>
	</body>
	</html>