<?php
	if($_POST['insert']?? ''){
	$title = $_POST['title'];
	$price = $_POST['price'];
	$image_url = $_FILES['image_url']['name'];
	$sqlquery = "INSERT INTO image (title,price,img) 
	VALUES ('$title','$price','$image_url')";
	copy($_FILES['image_url']['tmp_name'],'img/'.$_FILES['image_url']['name']);
	$conn->query($sqlquery);
	header('location: image.php');
	exit();
};
if(isset($_GET['delete'])){
	$del_id = $_GET['delete'];
	$conn->query("DELETE FROM image WHERE I_ID = $del_id") or die($conn->error());
};
if(isset($_GET['edit'])){
	$edit_id = $_GET['edit'];
	$record = "SELECT * FROM image WHERE I_ID = $edit_id";
	$data_edit = ($conn->query($record))->fetch_all(MYSQLI_ASSOC);
	if(count($data_edit)==1){
		$row = $data_edit[0];
		$title_edit = $row['title'];
		$price_edit = $row['price'];
		$img_edit = $row['img'];
	}
	if($_POST['update']?? ''){ 
		$id_edit = $_GET['edit'];
		$title = $_POST['title'];
		$price = $_POST['price'];
		copy($_FILES['image_url']['tmp_name'],'img/'.$_FILES['image_url']['name']);
		$img = $_FILES['image_url']['name'];	

		$update = "UPDATE image SET title='$title',price='$price',img='$img' WHERE I_ID = $id_edit";
		$conn->query($update);
	};
};

// //----------------------------------------------------------------------

$base_url = 'http://localhost/MainProject/project/img/';

//--------------------------------------------------------------------------
$result = $conn->query("SELECT * FROM image;");
$data = $result->fetch_all(MYSQLI_ASSOC);
?>