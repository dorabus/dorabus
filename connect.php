<?php
$hostname="mysql.hostinger.sk"; //local server name default localhost
$username="u639839486_dora";  //mysql username default is root.
$password="dorabus123";       //blank if no password is set for mysql.
$database="u639839486_dorad";  //database name which you created
$con=@mysql_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysql_error());
}

mysql_select_db($database,$con);
?>