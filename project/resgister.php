<?php

if(isset($_POST['insert'])){
	if(isset($_POST['user_name']) && isset($_POST['password']) ){
		function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		function alert($msg){
			echo "	<script type='text/javascript'>alert('$msg');</script>";

		}
		$uname = validate($_POST['user_name']);
		$pwd = md5(validate($_POST['password']));
		if(empty($uname)){
			header('Location: admin.php?error= User name is required?');
			exit();
		}
		else if(empty($pwd)){
			header('location: admin.php?error= Password is required');
			exit;
		}
		else{
			$sqlquery_uname = "SELECT * FROM admin WHERE user_name = '$uname' ";
			$result_uname = $conn->query($sqlquery_uname);
			if(mysqli_num_rows($result_uname) === 1){
				alert("Username already exists");
			}
			else{
				$sqlquery = "INSERT INTO admin(user_name,password) VALUES 
				('$uname','$pwd')";
				$result = $conn->query($sqlquery);
				alert("Subject!");
			}
		}
	}
};
if(isset($_GET['delete'])){
   $A_ID = $_GET['delete'];
   $sqlquery = "DELETE FROM admin WHERE A_ID = $A_ID";
   $delete = $conn->query($sqlquery);
   header("Location: admin.php");
   exit;
};
if(isset($_GET['edit'])){
    $A_ID = $_GET['edit'];
    $sqlquery = "SELECT * FROM admin WHERE A_ID = $A_ID";
    $result = $conn->query($sqlquery);
    if(mysqli_num_rows($result) === 1){
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $row = $data[0];
        $row_uname = $row['user_name'];
        $row_pass = $row['password'];
    }
    if (isset($_POST['update'])) {
		$A_ID = $_GET['edit'];
		$update_uname = $_POST['user_name'];
		$update_pass = md5($_POST['password']);
		$update = "UPDATE admin SET user_name = '$update_uname' , password = '$update_pass'
		WHERE A_ID = $A_ID";
		$result = $conn->query($update);
		header("Location: admin.php");
   		exit;
	}
};

$sqlquery = "SELECT * FROM admin ";
$result = $conn->query($sqlquery);
$data = $result->fetch_all(MYSQLI_ASSOC);
 ?>