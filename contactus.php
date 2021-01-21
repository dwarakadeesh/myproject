<?php
   $name=$_POST["c1"];
   $email=$_POST["c2"];
   $phone=$_POST["c3"];
   $address=$_POST["c4"];
   $city=$_POST["c5"];

  $con=mysql_connect("localhost","root","");
  mysql_query("use travel");
  mysql_query("insert into contactus values('$name','$email','$phone','$address','$city')");
  echo("<h1>We will try our best to help you out..!!!");
  echo("<h2><a href='contactus.html'>BACK</a>"); 
   
?>