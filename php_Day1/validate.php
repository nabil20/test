<html>
	<body>
	<?php
		//$validate_name="*[a-zA-Z]"
	/*	 $pattern = '/^[a-zA-Z]{1,25}$/'
	if(preg_match($validate_name,$_POST["fname"], $validate_name,PREG_OFFSET_CAPTURE))
		echo "welcome $validate_name"
*/
		if (empty($_POST['fname']))
		{
		  echo 'No name was entered!<br />';
		}elseif (!empty($_POST['fname'])){
		  $name = $_POST['fname']; 
		  $pattern = '/^[a-zA-Z]{1,25}$/';		
		  if (preg_match($pattern,$name))
			{
			echo '<b>'.$name.'</b> is a valid name.<br />';
			 } 
		else
			{ 
			echo '<b>'.$name.'</b> is not a valid name.<br />';
			}
		  }
		
			//check Last Name:
		if (empty($_POST['lname']))
		{
		  echo 'No name was entered!<br />';
		}elseif (!empty($_POST['lname'])){
		  $name = $_POST['lname']; 
		  $pattern = '/^[a-zA-Z]{1,25}$/';		
		  if (preg_match($pattern,$name))
			{
			echo '<b>'.$name.'</b> is a valid name.<br />';
			 } 
		else
			{ 
			echo '<b>'.$name.'</b> is not a valid name.<br />';
			}
		  }

		// Validation with PHP Filter
	if (empty($_POST['email'])){
	  echo 'No email was entered!<br />';
	}elseif (!empty($_POST['email'])){
	  $email=$_POST['email'];
	  if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)){
	    echo '<b>'.$email.'</b> is not a valid Email address.';
	  }else{
	    echo '<b>'.$email.'</b> is a valid Email address';
	  }
}
		//validate zip code:
		if(empty($_POST['zipcode']))
		{
			echo"no zip code was entered";
		}
		elseif(!empty($_POST['zipcode']))
		{
			$zip=$_POST['zipcode'];
			$pattern= '/[0-9]{5}/';//"#[0-9]{5}#"
			if(preg_match($pattern,$zip))
				{
					echo "<br/>valid zip code";
				}
			else
			{
				echo "<br/>not valid";
			}
		}

		$passwd=$_POST['passwd'];
		$cpasswd=$_POST['cpasswd'];
		if ($passwd==$cpasswd)
			echo "<br/>"."Passwd Same"."<br/>";
		else
			echo "<br/>"."Passwd Different"."<br/>";

		
		//Captcha:
		
		

	?>





	</body>
</html>
