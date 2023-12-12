<?php 
	include "db_conn.php";
	include "db_contact.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Feed Back</title>
	<link rel="stylesheet" type="text/css" href="image.css">

</head>
<body>
	<a href="http://localhost/MainProject/project/dashboard.php?" type="submit" class="btn">Back</a>
	<table >
			<thead>
			<th colspan="5">Feed Back</th>
			<tr>
				<td>ID</td>
				<td>You Name</td>
				<td>Email</td>
				<td>Subject</td>
				<td>Comment</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data as $a): 
					$id = $a['C_ID'];
					$delete_url = "feed_back.php?delete=$id";
					?>
					<tr>
						<td><?php echo $a['C_ID']?></td>
						<td><?php echo $a['your_name'] ?></td>
						<td><?php echo $a['email'] ?></td>
						<td><?php echo $a['subject'] ?></td>
						<td><?php echo $a['comment']?></td>
						<td><a href="<?php echo "$delete_url" ?>" class='del_btn'>Delete</a></td>
					</tr>
				<?php endforeach; ?>
		</tbody>
		</table>
</body>
</html>