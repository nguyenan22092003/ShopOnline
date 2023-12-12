<?php 
	include "db_conn.php";
	include "db_customers.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Customers</title>
	<link rel="stylesheet" type="text/css" href="image.css">

</head>
<body>
	<a href="http://localhost/MainProject/project/dashboard.php?" type="submit" class="btn">Back</a>
	<table >
			<thead>
			<th colspan="5">Customers</th>
			<tr>
				<td>ID</td>
				<td>You Name</td>
				<td>Email</td>
				<td>Subject</td>
				<td>Comment</td>
				<td>Tilte</td>
				<td>Price</td>
				<td>Size</td>
				<td>Quantity</td>
				<td>total</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data_customer as $a): 
					$id = $a['customer_id'];
					$delete_url = "customer.php?delete=$id";
					?>
					<tr>
						<td><?php echo $a['customer_id']?></td>
						<td><?php echo $a['name'] ?></td>
						<td><?php echo $a['phone'] ?></td>
						<td><?php echo $a['location'] ?></td>
						<td><?php echo $a['note']?></td>
						<td><?php echo $a['title']?></td>
						<td>$<?php echo $a['price']?></td>
						<td><?php echo $a['size']?></td>
						<td><?php echo $a['quantity']?></td>
						<td>$<?php echo $a['total']?></td>
						<td><a href="<?php echo "$delete_url" ?>" class='del_btn'>Delete</a></td>
					</tr>
				<?php endforeach; ?>
		</tbody>
		</table>
</body>
</html>