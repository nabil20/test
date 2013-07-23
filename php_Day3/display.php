<html>
    <head>
    </head>
    
    <body>
        <?php
                $conn = mysql_connect('localhost','root','redhat6');
                mysql_select_db('my_db',$conn);
                
                $sql_statement = "select * from users";
                $result=mysql_query($sql_statement,$conn);
                $num_rows = mysql_num_rows($result);
                $arr_result=mysql_fetch_row($result);
              //  var_dump($arr_result);
               // echo "$num_rows";
                //$i=0;
                echo"<table border=2px cellspacing=4px>";
                    echo "<tr>";
                        echo "<td>"." "."Fname"."</td>" ;
                        echo "<td>"." "."Lname"."</td>" ;
                        echo "<td>"." "."mail"."</td>" ;
                        echo "<td>"." "."zipcode"."</td>" ;
                        echo "<td>"." "."passwd"."</td>" ;
                   echo "</tr>";
            
                while ($arr_result=mysql_fetch_row($result) )
                {   //echo"<table border=2px cellspacing=4px>";
                    echo "<tr>";
                        echo "<td>"." "."$arr_result[0]"."</td>" ;
                        echo "<td>"." "."$arr_result[1]"."</td>" ;
                        echo "<td>"." "."$arr_result[2]"."</td>" ;
                        echo "<td>"." "."$arr_result[3]"."</td>" ;
                        echo "<td>"." "."$arr_result[4]"."</td>" ;
                    echo "</tr>";
                    }
                echo "</table>";
                mysql_close($conn);
        ?>
        
        
    </body>
    
</html>