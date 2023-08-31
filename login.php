<?php
mysql_connect('127.0.0.1','root','') or die(mysql_error());
mysql_select_db('studentregistrationsystem') or die (mysql_error());

$reg =$_POST['PERIOD'];
$studNum=$_POST['txtStudNum'];
$Pin=$_POST['txtPin'];

$query = "insert login values('$reg','$studNum','$Pin')";
$re= mysql_query($query) or die (mysql_error());

echo 'DATA SUCCESFULLY INSERTED';
header("Refresh:5; url=index.html");
?>