<?php session_start();  ?>
<?php
	$dictionary = file("words.csv", FILE_IGNORE_NEW_LINES);

	$numberdictionary = ['1','2','3','4','5','6','7','8','9','0'];

	$symboldictionary = ['*','`','~','!','@','#','$','%','^','&','*','(',')','-','_','=','+','[',']','{','}','|',':',';','<','>','/','?','.',','];

	function checkNumlength(){
		$length=strlen($_POST['number-of-words']);
		if ($length > 1 ){
			return FALSE;
		}
		else{
			return TRUE;
		}

	}

	if(!isset($_POST['submit'])){
		echo "<h1>Error</h1>\n
    		<p>Accessing this page directly is not allowed.</p>";
  		exit;
		}
		if(isset($_POST['number'])){
			$number=1;
		}
		else{
			$number=0;
		}

		if(isset($_POST['symbol'])){
			$symbol=1;
		}
		else{
			$symbol=0;
		}

		if($_POST['number-of-words'] =="" || !is_numeric($_POST['number-of-words']) || $_POST['number-of-words'] > 9 || $_POST['number-of-words'] < 0 || !checkNumlength())  {
			$numberofwords=4;
			$_SESSION['isnumber']="<p class='invalid'>Invalid Number. Defaulting to 4 word long password.<p>";
		}
		else{
			$numberofwords=$_POST['number-of-words'];
		}
		function generatepw($words,$numbers,$symbols){
			global $dictionary;
			global $numberdictionary;
			global $symboldictionary;
			global $password;
			for ($i = 0; $i <= $words; $i++) {
				$temp[$i] =$dictionary[rand(0,sizeof($dictionary)-1)];
			}
			if($words== 0){
				$password="";
			}else{
				$password=$temp[0];
				for ($j = 1; $j < sizeof($temp)-1; $j++){
				$password=$password . "-". $temp[$j];
				}
			}
			if($numbers==1){
				$password=$password.$numberdictionary[rand(0,sizeof($numberdictionary)-1)];
			}
			if($symbols==1){
				$password=$password.$symboldictionary[rand(0,sizeof($symboldictionary)-1)];
			}
			$_SESSION['password']=$password;
		}
		generatepw($numberofwords,$number,$symbol);
		header("Location: http://p2.stevengolden.me"); /* Redirect browser */
		exit();
?>