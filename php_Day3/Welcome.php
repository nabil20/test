	<?php
               $name = $_POST['fname'];
               $passwd=$_POST['passwd'];
            //   echo "$name";
            //   echo "$passwd";

               if(empty($name) || empty($passwd)) 
               {
               	header('Location: login.php');
               	}
               	else { 
               	
               		               
			    //echo gettype($passwd);
                settype($passwd,"integer");
               // echo gettype($passwd);
                
                $conn = mysql_connect('localhost','root','redhat6');
                
                mysql_select_db('my_db',$conn);
                
/*                
                $sql_statement = "select * from users where First_Name='". $name ."' AND Password='". $passwd ."'";
                //'". $username ."' OR email = '". $email ."'"); 
                //echo "$sql_statement";
                $result=mysql_query($sql_statement,$conn); 
                //$arr_result=mysql_fetch_row($result);
                $count=mysql_num_rows($result);
		
											                
                //echo "$arr_result";
               // $count=count($arr_result);
               // echo $count;
                
              
            if($count==1)
            {
                echo "welcome";
            }
            else{
                
                echo "noooooooooo";
            }
         }
                */
                
                //true code:    
                $sql = "select * from users where First_Name='". $name ."' AND Password='". $passwd ."'";
								      
                $result = mysql_query($sql);

                if(mysql_num_rows($result) > 0)
                    {
		     if(isset($_COOKIE["TestCookie"]))
		     {
					$_COOKIE["TestCookie"]=$name;
                    echo "welcome"." ".$_COOKIE["TestCookie"] . "<br />";
		    		echo $_COOKIE["TestCookie"];
		     }
		     else
		     {
			    echo "am here ";			    
		     }
                   // echo "welcome"." ".$_COOKIE["TestCookie"] . "<br />";
                       }
                     else{
                     // header('Location: register.html');
                     echo "nooo";
                 }                   
      		      mysql_close($conn);
            }
       
  	 ?>
                        
                  
         
         
         
<?php
  //$arr_result=mysql_fetch_row($result);

            /*
		while ($arr_result=mysql_fetch_row($result) )
                {
		    if ($arr_result[0] ==$name && $arr_result[4]==$passwd)
			    echo "welcome";
		    
		    else
			echo "try again";
			break;
		}
            */
     ?>       
