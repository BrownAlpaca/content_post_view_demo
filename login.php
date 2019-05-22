<?php
require "includes/db.php";
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$success=false;
$sql="SELECT * FROM a4login JOIN a4users ON users_id = login_user_id WHERE login_uname='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
           if(password_verify($password,$row['login_pswd'])){
                $success=true;
                $fullname=$row['users_fname']." ".$row['users_lname'];
                break;
            }
        }
    }

    if($success){
        session_start();
    	$_SESSION["username"] = $fullname;
        $_SESSION["username2"]= $username;
    	$_SESSION["status"]="login";
    	header("Location: index.php");
    }
    else{
    	header("Location: index.php?loginError=1");
    }
?>
