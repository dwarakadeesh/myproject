<?php
$con=mysql_connect("localhost","root","");
if($con==false)
{
die("Error in connection");
}
mysql_query("use travel",$con);
$res=mysql_query("select * from book1");
echo("<table border=1>");
echo("<tr>");
echo("<th>Username");
echo("<th>Address");
echo("<th>City");
echo("<th>Package_type");
echo("<th>Vehicle_type");
echo("<th>Select_place");
echo("<th>Select_paymettype");
echo("</tr>");
while($row=mysql_fetch_array($res))
{
echo("<tr>");
echo("<td>".$row[0]);
echo("<td>".$row[1]);
echo("<td>".$row[2]);
echo("<td>".$row[3]);
echo("<td>".$row[4]);
echo("<td>".$row[5]);
echo("<td>".$row[6]);
echo("</tr>");
}
echo("</table>");

mysql_close($con);
?>