<html>
    <head>
        
    </head>
    <?php
	//to define cookie:
	
	$value = 'something from somewhere';
	setcookie("TestCookie", $value); //,time()-3600
	


	//to define session and each time visit the site count one:
//	session_start();
	/*
	if( isset( $_SESSION['counter'] ) )
	{
	    $_SESSION['counter'] += 1;
	}
	else
	{
	    $_SESSION['counter'] = 1;
	}
	    $msg = "You have visited this page ". $_SESSION['counter'];
	    $msg .= "in this session.";
	    echo $msg; */
/*
    
        $inactive = 10;
	$session_life = time() - $_session['timeout']; 
	if($session_life > $inactive)
	{
		echo "$session_life";
	   session_destroy();
//	   header("Location: login.php");

	}
	$_session['timeout']=time();
  */  
/*
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 60)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
      header("Location: login.php");
}
*/

//$_SESSION['LAST_ACTIVITY'] = time();
    ?>
    
    
    <body>
    <center><div style="background-color:pink;height:130px;width:300px;">
       <form action="Welcome.php"  method="POST">
        <table>
            <tr>
                <th> First Name </th>
                <td> <input type="text" name="fname"></td>
            </tr>
            
            <tr>
                <th> Password </th>
                <td> <input type="password" name="passwd"></td>
            </tr>
                
                    <tr>
		<td colspan="2" >
		    <center>
			<input type="submit" value="Login" align="center" target="_blank" >
		    </center>
		</td>
		    </tr>
        </table>
    
       </form>
       </div>
	

    </body>
</html>
