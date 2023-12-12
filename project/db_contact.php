<?php 
	if(isset($_POST['submit'])){
		$your_name = $_POST['your_name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		if($_SERVER['REQUEST_METHOD'] == "POST"){
     		$detail = $_POST['details'];
 			$sqlquery = "INSERT INTO contact(your_name,email,subject,comment)
			VALUES ('$your_name','$email','$subject','$detail')";
			$result = $conn->query($sqlquery);
     			
 		}
		
	};
	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$delete = "DELETE FROM contact WHERE C_ID = $id";
		$conn->query($delete);
	}

		// --------------------
	$sqlquery = "SELECT * FROM contact;";
	$result = $conn->query($sqlquery);
	$data = $result->fetch_all(MYSQLI_ASSOC);

?>