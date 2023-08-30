 <?php
mysql_connect('127.0.0.1','root','') or die(mysql_error());
mysql_select_db('studentregistrationsystem') or die (mysql_error());
$StudentNumber=$_POST['txtStudentNumber'];
$IDNumber =$_POST['txtIDNumber'];
$FirstName=$_POST['txtFirstName'];
$LastName =$_POST['txtLastName'];
$Gender=$_POST['g'];
$Qualification=$_POST['txtQualification'];
$Accomodation=$_POST['txtAccomodation']; 
$DeliverySite=$_POST['txtDeliverySite'];
$EmailAddress=$_POST['txtEmailAddress'];
$ContactDetails=$_POST['txtContactDetails'];

$query = "insert transportsubsystem values('$StudentNumber', '$IDNumber','$FirstName','$LastName','$Gender',
'$Qualification','$Accomodation','$DeliverySite','$EmailAddress','$ContactDetails')";
$re= mysql_query($query) or die (mysql_error());

echo 'succefully';
header("Refresh:5; url=index.html");
?>