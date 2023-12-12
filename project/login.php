<?php 
session_start();

if (isset($_POST['uname']) && isset($_POST['password']) ) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }
    
    function filter($injection){

        return $injection & '' or $injection & "";

    }

    function alert($msg){

        echo "  <script type='text/javascript'>alert('$msg');</script>";
 
    }

    $uname = validate($_POST['uname']);

    $pass = md5(validate($_POST['password']));


    if (empty($uname)) {

        header("Location: account.php?error=User Name is required");

        exit();

    }
    else if(empty($pass)){

        header("Location: account.php?error=Password is required");

        exit();

    }
    else{

        $sql = "SELECT * FROM admin WHERE user_name='$uname' AND password='$pass' ";

        $result = $conn->query($sql);

        if (mysqli_num_rows($result) === 1) {

            $row = $result->fetch_all(MYSQLI_ASSOC);

            if ($row[0]['user_name'] === $uname && $row[0]['password'] === $pass) {

                alert("Logged in!");

                $_SESSION['id'] = $row[0]['id'];

                $_SESSION['user_name'] = $row[0]['user_name'];

                $_SESSION['password'] = $row[0]['password'];

                header("Location: dashboard.php");

                alert("Subject");

                exit();

            }
    
        else{  header("Location: account.php?error=Incorect User name or password ");}
        }
    else{  header("Location: account.php?error=Incorect User name or password ");}
    }    
}
?>