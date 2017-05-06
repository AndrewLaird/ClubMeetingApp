<?php
include 'databaseConnect.php';
#you now have $conn
$user_first = $_POST['first'];
$user_last = $_POST['last'];
$user_major = $_POST['major'];
$user_email = $_POST['email'];
$user_password = $_POST['password'];
$user_password_crypted = crypt($user_password,"SUP3RSA1T!");


$query = "INSERT INTO clubmeetingapp.users (First,Last,Major,Email,Password) VALUES ('".$user_first."', '".$user_last."', '".$user_major."', '".$user_email."', '".$user_password_crypted."')";
if($conn->query($query)===TRUE){
	echo "Sucessful created new user<br>";
}
else{
	echo "the whole thing exploded<br>";
}
echo "We made it to the end";

?>