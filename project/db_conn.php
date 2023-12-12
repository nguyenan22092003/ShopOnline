<?php 
$severname = "localhost:3306";
$username = "username";
$password = "vyvGSjrNc3iX24F8";
$dbname = "project";
$conn = new mysqli($severname,$username,$password,$dbname);
if(!$conn){
	echo "Connection failed";
};

?>