<?php
mysql_connect('127.0.0.1','root','') or die(mysql_error());
mysql_select_db('studentregistrationsystem') or die (mysql_error());

$fname =$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$subject =$_POST['subject'];

$query = "insert contact values('$fname','$lname','$email','$message')";
$re= mysql_query($query) or die (mysql_error());

echo 'DATA SUCCESFULLY INSERTED';
header("Refresh:5; url=index.html");
?>