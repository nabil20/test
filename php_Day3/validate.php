<html>
	<body>
	<?php
		$conn = mysql_connect('localhost','root','redhat6');		
		$totalResult="";		
		//check on first name
		if (empty($_POST['fname']))
		{
		  echo 'No name was entered!<br />';
		}elseif (!empty($_POST['fname'])){
		  $name = $_POST['fname']; 
		  $pattern = '/^[a-zA-Z]{1,25}$/';		
		  if (!preg_match($pattern,$name)) 
			echo '<b>'.$name.'</b> is not a valid name.<br />';
		else
			$totalResult= "$name ";
			
		//check Last Name:
		if (empty($_POST['lname']))
		{
		  echo 'No name was entered!<br />';
		}elseif (!empty($_POST['lname'])){
		  $name = $_POST['lname']; 
		  $pattern = '/^[a-zA-Z]{1,25}$/';		
		  if (preg_match($pattern,$name))
			{
			//echo '<b>'.$name.'</b> is a valid name.<br />';
			$totalResult.="$name ";
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
	//	    echo '<b>'.$email.'</b> is a valid Email address';
			$totalResult.="$email ";
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
//					echo "<br/>valid zip code";
			$totalResult.="$zip ";
				}
			else
			{
				echo "<br/>not valid";
			}
		}

		//check passwd , must be same to submit:
		$passwd=$_POST['passwd'];
		$cpasswd=$_POST['cpasswd'];
		if ($passwd==$cpasswd)
//			{echo "<br/>"."Passwd Same"."<br/>";
					$totalResult.="$passwd\n";
					
					
			}		
		else
			{
			echo "<br/>Passwd Different <br/>";
			}

		//code of upload file:
	if ($_FILES["myfile"]["error"] > 0)
		{
			echo "Error: " . $_FILES["myfile"]["error"] . "<br />";
		}
		else
		{
			echo "Upload: ". $_FILES["myfile"]["name"];
			echo "Type: " .  $_FILES["myfile"]["type"];
			echo "Size: " . $_FILES["myfile"]["size"];
			echo "Stored in: " . $_FILES["myfile"]["tmp_name"];
		}

		//To store the uploaded file we need to copy it to a different
			$pattern='/.pdf$/';
			if(preg_match($pattern,$_FILES["myfile"]["name"]))
			{
				if (file_exists("upload/" . $_FILES["myfile"]["name"]))
				{
					//echo $_FILES["myfile"]["name"] . " already exists. ";
				} 
				else
				 {	
					move_uploaded_file($_FILES["myfile"]["tmp_name"],"upload/" . $_FILES["myfile"]["name"]);
	//				echo "Stored in: " . "upload/" . $_FILES["myfile"]["name"];		
				}
			}
			else
			{
				echo "please choose another file to upload";
			}
	// create table users (First_Name VARCHAR(25),Last_Name VARCHAR(25),E_mail VARCHAR(25),Zip_Code INT,Password VARCHAR(25));
		mysql_select_db('my_db',$conn);
		
		
		$arr=explode(" ",$totalResult);		
		//echo "welcome"."$arr[0]";		
		$result = count($arr);			
			//echo"$result";			
	
		if($result==5)
		{
			$sql_statement = " insert into users values ('".$arr[0]."',"."'".$arr[1]."',"."'".$arr[2]."','".$arr[3]."','".$arr[4]."')";
			//echo $sql_statement;		
			mysql_query($sql_statement);	
		}
		else
			 {echo "no please fill all fields"; }		
		
		mysql_close($conn);

?>	
	<a href="display.php" target="_blank">Click Here to See Tables</a>				

	</body>
</html>
