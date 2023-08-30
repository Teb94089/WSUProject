<?php
mysql_connect('127.0.0.1','root','') or die(mysql_error());
mysql_select_db('studentregistrationsystem') or die (mysql_error());

$StudentNumber=$_POST['txtStud'];
$FirstName=$_POST['txtFName'];
$LastName=$_POST['txtLName'];
$IDNumber=$_POST['txtID'];
$ResidentialAddress=$_POST['txtAddress'];
$PostalAddress=$_POST['txtPostal'];
$ContactDetails=$_POST['txtContact'];
$Gender=$_POST['g'];
$EmailAddress=$_POST['txtEmail'];
$ProgramRegistering=$_POST['txtRegistration'];
$Modules=$_POST['Modules'];
$newvalues= implode(",",$Modules);



$query = "insert registrationsubsystem values('$StudentNumber','$FirstName','$LastName','$IDNumber','$ResidentialAddress','$PostalAddress','$ContactDetails','$Gender','$EmailAddress','$ProgramRegistering','$newvalues')";
$re= mysql_query($query) or die (mysql_error());

echo 'DATA SUCCESFULLY INSERTED';
header("Refresh:5; url=reg.html");
?> 