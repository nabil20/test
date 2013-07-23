<?php 


//to know number of lines in the text:
//$file="data.txt";
//$linecount = 0;
$handle = fopen("data.txt", "r+");
$file=fgets($handle);
//echo "here";
//echo $file;

$div_string=explode(" ",$file);
echo $div_string[0]."<br>";
echo $div_string[1]."<br>";
echo $div_string[2]."<br>";
echo $div_string[3]."<br>";
/*
while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}

fclose($handle);

//echo $linecount;


//to draw the table:

$rows =$linecount ; // define number of rows
$cols = 5;// define number of columns
echo "<table border='1'>"; 
    echo "<tr>"; 
         echo "<th>"."  First Name  ". "</th>"; 
         echo "<th>"."  Last Name  ". "</th>"; 
         echo "<th>"."  E-Mail  ". "</th>"; 
         echo "<th>"."  Zip Code  ". "</th>"; 
		 echo "<th>"."  Encrypted Passwd  ". "</th>"; 
    echo "</tr>"; 

for($tr=2;$tr<=$rows;$tr++){ 
      
    echo "<tr>"; 
        for($td=1;$td<=$cols;$td++){ 
               echo "<td>row: ".$tr." column: ".$td."</td>"; 
        } 
    echo "</tr>"; 
}  
echo "</table>"; 


foreach($div_string as $i )
{
		$string=$div_string[0];
		$div_char=explode(" ",$string);
		echo 	$div_char[0];	
}

$int=md5(123);
echo $int;

//echo $div_string[3];


echo "<html><body><table border=1>\n\n";
$f = fopen("data.txt", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "<tr>\n";
}
fclose($f);
echo "\n</table></body></html>";



*/


?>
