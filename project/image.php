<?php 
include "db_conn.php";
include "db_img.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="image.css">
	<title>Image</title>
</head>
<body>
	<a href="http://localhost/MainProject/project/dashboard.php?" type="submit" class="btn">Back</a>
	<form method="POST" enctype="multipart/form-data" >
		<h1><center>IMAGE</center></h1>
		<div class="input-group">
			<label for="title">Title:</label>
			<input type="text" name="title" placeholder=" Class Name" required value="<?php echo ($title_edit)?? ''; ?>">
		</div>
		<div class="input-group">
			<label for="price">Price:</label>
			<input type="number" name="price" placeholder=" Price " required min="0" value="<?php echo "$price_edit"; ?>">
		</div>
		<div class="input-group">
			<label for="image_url">Image URL :</label>
			<input type="file" name="image_url" required value="">
		</div>
		<div>
			<input type="submit" name="insert" value="Insert" class="btn">
			<input type="submit" name="update" value="Update" class="btn"> 
		</div>
	</form>

	<form method="GET">
		<table >
			<thead>
			<th colspan="5">IMAGE</th>
			<tr>
				<td>ID</td>
				<td>Tile</td>
				<td>Price</td>
				<td>Image</td>
				<td colspan="2">Action</td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data as $a): 
					$id = $a['I_ID'];
					$edit_url = "image.php?edit=$id#form";
					$delete_url = "image.php?delete=$id";
					?>
					<tr>
						<td><?php echo $a['I_ID']?></td>
						<td><?php echo $a['title'] ?></td>
						<td><?php echo $a['price']?></td>
						<td><img src="<?php echo $base_url.$a['img']; ?>" width=50px;></td>
						<td><a href="<?php echo "$edit_url"?>" class='edit_btn'>Edit</a></td>
						<td><a href="<?php echo "$delete_url" ?>" class='del_btn'>Delete</a></td>
					</tr>
				<?php endforeach; ?>
		</tbody>
		</table>
	</form>
</body>
</html>