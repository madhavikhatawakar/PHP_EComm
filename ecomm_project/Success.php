<?php
include "Helper.php";
$obj=new Helper("ecomm");

// Assigning posted values to variables.
$name = $_POST[ 'name' ];

$pass = $_POST[ 'password' ];

$field="'admin_name','password'";
$table="admin";
$condition=" admin_name='$name' AND password='$pass' ";
$result=$obj->read_record($field,$table ,$condition);
var_dump($result);
 #$count = mysql_num_rows($result);
if (is_array($result))
{
	
	
	$_SESSION['name'] = $row['admin_name'];
	echo "Hi " . $name . "";
	header("Location: html/After_Admin_Login.html");
	

}
else
{
	//If the login credentials doesn't match, he will be shown with an error message.
	echo "Invalid Login Credentials.";
	header("Location: html/registerAdmin.html");
}

?>


    