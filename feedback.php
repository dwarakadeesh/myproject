<?php
  $con=mysql_connect("localhost","root","");
  $s1=$_POST["f1"];
  $s2=$_POST["f2"];
  $s3=$_POST["f3"];
  $s4=$_POST["f4"];

   mysql_query("use travel");
   mysql_query("insert into feedback values('$s1','$s2','$s3','$s4')");
   echo("<h1>Feedback Completed");
    
   echo("<h1> <a href='login.html'> Back to home page </a>");

?>