<?php 
include "db_conn.php";
include "resgister.php";
 ?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="image.css">
   <title>Admin</title>
</head>
<body>
   <a href="http://localhost/MainProject/project/dashboard.php?" type="submit" class="btn">Back</a>
   <form method="POST"  >
      <h1><center>ADMIN</center></h1>
      <?php if(isset($_GET['error'])){ ?>
           <p class="error"><?php echo $_GET['error'];?> </p>
      <?php } ?>
      <div class="input-group">
         <label for="user_name">User name:</label>
         <input type="text" name="user_name" placeholder="UserName" value="<?php echo ($row_uname)?? ""  ?>" >
      </div>
      <div class="input-group">
         <label for="password">Password:</label>
         <input type="password" name="password" minlength="8"
         value="" placeholder="Password">
      </div>
      <div>
         <input type="submit" name="insert" value="Insert" class="btn">
         <input type="submit" name="update" value="Update" class="btn"> 
      </div>
   </form>

   <form method="GET">
      <table >
         <thead>
         <th colspan="5">ADMIN</th>
         <tr>
            <td>ID</td>
            <td>UserName</td>
            <td>Password</td>
            <td colspan="2">Action</td>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($data as $a): 
               $id = $a['A_ID'];
               $edit_url = "admin.php?edit=$id";
               $delete_url = "admin.php?delete=$id";
               ?>
               <tr>
                  <td><?php echo $a['A_ID']?></td>
                  <td><?php echo $a['user_name'] ?></td>
                  <td><?php echo $a['password']?></td>
                  <td><a href="<?php echo "$edit_url"?>" class='edit_btn'>Edit</a></td>
                  <td><a href="<?php echo "$delete_url" ?>" class='del_btn'>Delete</a></td>
               </tr>
            <?php endforeach; ?>
      </tbody>
      </table>
   </form>
</body>
</html>