<html>
    <head>
        <title> Welcome PHP </title>
    </head>
    
    <body> 
		<?php 
			/*error_reporting(E_ALL);
            ini_set("display_errors", 1);*/
			/*
			echo "Welcome PHP"."<br/>";
			$x=10; 
			$y="20" ;
			echo $x+$y;
			*/

			for ($i=1; $i<=5; $i++)
			  {
			   echo "The number is " . $i . "<br />";
			  }
				echo "<br/>";	
				echo "<br/>";	
				echo "<br/>";	

				$numbers=array(10,20,30,40,50);
				foreach ($numbers as $x)
					{
						echo "the number is ".$x."<br/>";
					}

				echo "<br/>";	
				echo "<br/>";	
				echo "<br/>";
				
				$y=1;
				while($y<=5)
				{
					echo"the number is ".$y."<br/>";
						$y++;
				}	

				echo "<br/>";	
				echo "<br/>";	
				echo "<br/>";
				
			$xx=1;
			do
		   {
			   $xx++;
			   echo "The number is " . $xx . "<br />";
		   }
			while ($xx<=5);
			echo "<br/>";	
			echo "<br/>";	
			echo "<br/>";

		$d=date("D");
		if ($d=="Mon")
   		echo "Have a nice weekend!";
	else
	   echo "Have a nice day!";

			echo "<br/>";	
			echo "<br/>";	
			echo "<br/>";
		     
		$favcolor="white";
	switch ($favcolor)
		{
		default:
		echo "Your favorite color not found";
		
		case "red":
		echo "Your favorite color is red!";
		break;
		case "blue":
		echo "Your favorite color is blue!";
		break;
		}
			echo "<br/>";	
			echo "<br/>";	
			echo "<br/>";
				//multidimensional array:
	$salaries = array("ahmed" => 2000,"ali" =>1000,"sara" =>500);
		echo "Salary of ahmed is ". $salaries['ahmed'] ."<br />";

		$marks = array("mohammad" => array ("physics" => 35,"maths" => 30),
					   "sara" => array ("physics" => 31,"maths" => 22) );
				echo "Marks for mohammad in physics : " ;
				echo $marks['mohammad']['physics'] . "<br />";
?>    
    </body>
</html> 
