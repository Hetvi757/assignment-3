<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','sou');

// get the post records

$txtName = $_POST['txtname'];
$txtsurname = $_POST['txtsurname'];
$txtPhone = $_POST['txtPhone'];
$txtemailid = $_POST['txtemailid'];

// database insert SQL code
$sql = "INSERT INTO `student` ( `name`, `surname`, `Phone`, `emailid`) VALUES ('0', '$txtName', '$txtsurname', '$txtPhone', '$txtemailid')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>