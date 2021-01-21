<?php
  $con=mysql_connect("localhost","root","");
  $s1=$_POST["t1"];
   $s2=$_POST["t2"];
   $s3=$_POST["t3"];
 
   mysql_query("use travel");
   mysql_query("insert into booking values('$s1','$s2','$s3')");
   echo("<h1>Booking Completed");
    
   echo("<h1> <a href='booking.html'> Back to home page </a>");
     echo("<h1> <a href='report.php'> Report </a>");

?>