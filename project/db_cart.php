<?php 
	// ----remove----
	if(isset($_GET['remove'])){
		$id_remove = $_GET['remove'];
		$size_remove = $_GET['size'];
		$sqlquery = "DELETE FROM cart where I_ID = $id_remove AND size = '$size_remove'";
		$result = $conn->query($sqlquery);
	};
	
	
	// -------update price-----------
	
	if(isset($_GET['update']) && isset($_GET['price'])){
		if(isset($_POST['ud'])){
		$new_quantity = $_POST['quantity_cart'];
		$id_update = $_GET['update'];
		$price = $_GET['price'];
		$update = "UPDATE cart SET quantity = $new_quantity WHERE I_ID = $id_update";
		$result_1 = $conn->query($update);
		$new_total = $new_quantity*$price;
		$sql_new_total = "UPDATE cart SET total = $new_total where I_ID = $id_update";
		$result_2 = $conn->query($sql_new_total);
		};
 	};




	//----------------------------------
	$sqlquery = "SELECT SUM(total) FROM cart";
	$result = $conn->query($sqlquery);
	$subtotal = $result->fetch_all(MYSQLI_ASSOC);
	// -----join----------
	$sqlquery = "SELECT * FROM image a JOIN cart b ON a.I_ID = b.I_ID";
	$result = $conn->query($sqlquery);
	$data = $result->fetch_all(MYSQLI_ASSOC);
?>