<?php

include 'databaseConnect.php';

echo "Connection Sucessful<br>";
$query = "CREATE DATABASE Users";
if($conn->query($query)){
	echo "Sucessful Database creation<br>";
}
else{
	echo "the whole thing exploded<br>";
}
echo "We made it?<br>";

?>