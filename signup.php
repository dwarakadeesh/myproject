<?php
  $con=mysql_connect("localhost","root","");
  $u=$_POST["t1"];
  $p=$_POST["t2"];
  $e=$_POST["t3"];
  $a=$_POST["t4"];
  $c=$_POST["t5"];
   $m=$_POST["t6"];
   mysql_query("use travel");
  mysql_query("insert into signup values('$u','$e','$p','$a','$c','$m')");
  echo("<h1>New Account created");
      echo("<h2><a href='aboutus.html'>back</a>"); 


?>