<?php
mysql_connect('127.0.0.1','root','') or die(mysql_error());
mysql_select_db('studentregistrationsystem') or die (mysql_error());

$StatementType =$_POST['txtStatementType'];
$DateOfBalance=$_POST['txtDateOfBalance'];
$DebitAmount=$_POST['txtDebitAmount'];
$CreditAmount =$_POST['txtCreditAmount'];
$Balance=$_POST['txtBalance'];

$query = "insert financesubsystem values('$StatementType','$DateOfBalance','$DebitAmount','$CreditAmount','$Balance')";
$re= mysql_query($query) or die (mysql_error());

echo 'DATA SUCCESFULLY INSERTED';
header("Refresh:5; url=index.html");
?>