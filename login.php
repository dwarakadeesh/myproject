<?php
  $con=mysql_connect("localhost","root","");
  $u=$_POST["t1"];
  $p=$_POST["t2"];
  if($u=="shirin"&&$p=="divya")
      {
echo("<a href='aboutus.html'><h1>Login Successfull</a>");
      }
 else 
  {
echo("<h1>Invalid username & password");
echo("<a href='login.html'><br>BACK & try again</a>");
   }
  
?>