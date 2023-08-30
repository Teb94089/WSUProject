<?php
mysql_connect('127.0.0.1','root','') or die(mysql_error());
mysql_select_db('studentregistrationsystem') or die (mysql_error());

$FirstChoice=$_POST['txtChoice1'];
$SecondChoice=$_POST['txtChoice2'];
$Surname=$_POST['txtSurname'];
$FirstName=$_POST['txtName'];
$OtherName=$_POST['txtOtherNames'];
$Initials=$_POST['txtInitials'];
$IdentityNumber=$_POST['txtIdentityPass'];
$DateOfBirth=$_POST['txtDateOfBirth'];
$Gender=$_POST['g'];
$Race=$_POST['txtRace'];
$Citizenship=$_POST['txtCitizenship'];
$Province=$_POST['txtSAPro'];
$PhysicalAddress=$_POST['txtAddress'];
$City=$_POST['txtCitySuburb'];
$Telephone=$_POST['txtTelephone'];

$LearnerCell=$_POST['txtLearnerCell'];
$Email=$_POST['txtEmail'];
$HomeLanguage=$_POST['txtHomeLang'];
$Religion=$_POST['txtReligion'];
$SchoolName=$_POST['txtSchoolName'];
$SchoolAddress=$_POST['txtSchoolAddress'];
$SchoolCode=$_POST['txtCode'];
$SchoolProvince=$_POST['txtProvince'];
$Country=$_POST['txtCountry'];
$ParentTittle=$_POST['txtTitlePar'];
$ParentInitial=$_POST['txtInitial'];
$ParentSurname=$_POST['txtSurnamePar'];
$ParentName=$_POST['txtFname'];
$ParentGender=$_POST['g'];
$ParentHomeLanguage=$_POST['txtLanguage'];
$ParentIDNumber=$_POST['txtIdentity'];
$ParentAddress=$_POST['txtAddress'];
$ParentCity=$_POST['txtCityAdd'];
$ParentCode=$_POST['txtCodeAdd'];
$ParentOccupation=$_POST['txtOccupation'];
$ParentMaritalStatus=$_POST['txtMarital'];
$CurrentStatus=$_POST['c'];
$query = "insert applicationsubsystem values('$FirstChoice','$SecondChoice','$Surname','$FirstName','$OtherName','$Initials','$IdentityNumber','$DateOfBirth',
'$Gender','$Race','$Citizenship','$Province','$PhysicalAddress','$City','$Telephone','$LearnerCell','$Email','$HomeLanguage','$Religion','$SchoolName',
'$SchoolAddress','$SchoolCode','$SchoolProvince','$Country','$ParentTittle','$ParentInitial','$ParentSurname','$ParentName','$ParentGender',
'$ParentHomeLanguage','$ParentIDNumber','$ParentAddress','$ParentCity','$ParentCode','$ParentOccupation','$ParentMaritalStatus','$CurrentStatus')";
$re= mysql_query($query) or die (mysql_error());

echo 'DATA SUCCESFULLY INSERTED';
header("Refresh:5; url=application.html");
?>