<?php
mysql_connect('127.0.0.1','root','') or die(mysql_error());
mysql_select_db('studentregistrationsystem') or die (mysql_error());

$Initials=$_POST['txtInitials'];
$Surname=$_POST['txtSur'];
$FirstName=$_POST['txtFname'];
$OthersName=$_POST['txtNames'];
$DateOfBirth=$_POST['txtDOB'];
$Gender=$_POST['g'];
$Race=$_POST['txtRace'];
$Ethnicity=$_POST['txtEthn'];
$Citizenship=$_POST['txtCitizen'];
$PhysicalAddress=$_POST['txtPhysical'];
$Code=$_POST['txtCode'];
$CellphoneNumber=$_POST['txtCell'];
$PInitials=$_POST['txtPinitials'];
$PSurname=$_POST['txtPsurname'];
$PFirstName=$_POST['txtPfirst'];
$PDateOfBirth=$_POST['txtPDOB'];
$PCellphoneNumber=$_POST['txtPCell'];

$query = "insert residentsubsystem values('$Initials','$Surname','$FirstName','$OthersName','$DateOfBirth','$Gender','$Race','$Ethnicity',
'$Citizenship','$PhysicalAddress','$Code','$CellphoneNumber','$PInitials','$PSurname','$FirstName','$PDateOfBirth','$PCellphoneNumber')";
$re= mysql_query($query) or die (mysql_error());

echo 'DATA SUCCESFULLY INSERTED';
header("Refresh:5; url=index.html");
?>