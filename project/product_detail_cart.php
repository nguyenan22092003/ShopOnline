<?php 
			// ----------- id img ------------
	if(isset($_GET['img'])){
	 $id = $_GET['img'];
	 $record = $conn->query("SELECT * FROM image where I_ID = $id");
	 $data_img = $record->fetch_all(MYSQLI_ASSOC);
		if (count($data_img)==1) {
		$row = $data_img[0];
		$row_title = $row['title'];
		$row_price = $row['price'];
		$row_img = $row['img'];	
		}		
    };
    // --------total-------------
    if(isset($_POST['quantity'])){
    	$quantity = $_POST['quantity'];
    	$id = $_GET['img'];
	 	$record = $conn->query("SELECT * FROM image where I_ID = $id");
	 	$data_img = $record->fetch_all(MYSQLI_ASSOC);
		if (count($data_img)==1) {
			$row = $data_img[0];
			$row_price = $row['price'];
			$total = $quantity*$row_price;
			if(isset($_POST['cart'])){
				$id_img = $_GET['img'];
				$size = $_POST['size'];
				$quantity = $_POST['quantity'];
				$query = "INSERT INTO cart(I_ID,size,quantity,total)
				VALUES('$id_img','$size','$quantity','$total')";
				$result = $conn->query($query);
			}	
		}

    }

?>