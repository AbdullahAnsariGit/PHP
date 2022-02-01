<?php
$con = mysqli_connect("localhost" , "root" , "" , "js-php");


// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
//else {
//	echo ("DB Connected");
//}

$query = "insert into record (username , password, confirm_password, email, first_name, last_name) values ('$_POST[uname]', md5('$_POST[pass]') , md5('$_POST[cpass]') , '$_POST[email]' , '$_POST[fname]' , '$_POST[lname]')";

if(mysqli_query($con,$query)){
	echo "Record Inserted";
}
else {
	echo "Record Not Inserted ";
}
?>