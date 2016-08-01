<?php
require_once "../includes/functions.php";

if(isset($_POST['username'])){
    $username = check($_POST['username']);
    $password = check($_POST['password']);
    
    db();
    global $link;

    $sql= "SELECT * FROM adminlogin WHERE adminname = '$username' AND password = '$password' LIMIT 1" or die ("error");

    $query = mysqli_query($link, $sql);
    if(mysqli_num_rows($query)==1){
        $row = mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['uid'] = $row['id'];
        $_SESSION['username'] = $row['adminname'];
         header('Location: ../upload.php');
        echo "loggin";
        exit();
    }else{
        echo "unsuccessfull, please are you an admin? the username is case sensitive";
        header('Location: login.html');
        exit();
    }

}
?>