<?php 

	// ---------function----------------
	function alert($msg){

        echo "  <script type='text/javascript'>alert('$msg');</script>";
 
    };
	// -----------order-------------
	if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['location'])){
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$location = $_POST['location'];
		$note = $_POST['note'];
		if(empty($name)){
			header("Location:  cart.php?error=Customer name not entered!");
        	exit();
		}
		else if(empty($phone)){
			header("Location:  cart.php?error=Did not enter phone number!");
        	exit();
		}
		else if(empty($location)){
			header("Location:  cart.php?error=Have not entered the delivery address!");
        	exit();
		}
		// ----------------
		else if(isset($_POST['order'])){
			
			$query_cart = "SELECT * FROM cart a ";
			$cart = $conn->query($query_cart);
			if(mysqli_num_rows($cart) != 0 ){
			$data_cart = $cart->fetch_all(MYSQLI_ASSOC);
			foreach($data_cart as $a){
				$O_ID = $a['O_ID'];
				$I_ID = $a['I_ID'];
				$size = $a['size'];
				$quantity = $a['quantity'];
				$total = $a['total'];
				// --------------------
				$query_order = "INSERT INTO orders(order_id,I_ID,size,quantity,total)
				VALUES('$O_ID','$I_ID','$size','$quantity','$total')";
				$result1 = $conn->query($query_order);
				// -------------------
				$sqlquery = "INSERT INTO customer(name,phone,location,note,I_ID,order_id)
				VALUES ('$name','$phone','$location','$note','$I_ID','$O_ID')";
				$result2 = $conn->query($sqlquery);
				//----------------------------
				$delete = "DELETE FROM cart WHERE O_ID = $O_ID";
				$result3 = $conn->query($delete);

			}
			header("Location: cart.php");
			exit();
			alert("Subject!");
			}
			else{
				alert("You did not choose the product!");
			}

		}
	}
	// --------------remove------------------
	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$delete = "DELETE FROM customer WHERE customer_id = $id";
		$result = $conn->query($delete);
		header("Location: customer.php");
		exit();
	};
	// -----------select-------------
	$sqlquery = "SELECT * FROM customer a JOIN orders b ON a.order_id = b.order_id
	JOIN image c ON a.I_ID = c.I_ID";
	$result = $conn->query($sqlquery);
	$data_customer = $result->fetch_all(MYSQLI_ASSOC);

?>