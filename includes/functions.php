<?php
// connect to database
function db(){
    global $link;
    $link = mysqli_connect("localhost", "root", "", "bookshelf") or die("couldn't connect to database");
    return;
}

// check for hackers
function check($string){
    $string = htmlentities($string, ENT_QUOTES, 'UTF-8');
    $string = strip_tags($string);
    $string = trim($string);
    $string = stripslashes($string);
    return $string;

}

// upload image
/***
 * @param $upimage = the directory to store the image
 * @param $g_picture = the posted image from the form ##the 'name' in the form is g_picture
 * note  ::::: alway put $g_image as the stuff that goes straight inside the database
 */
function image($upimage,$g_picture){
    global $g_image, $error, $errImageNotSet, $messageImageName, $errNotImage, $errImageExist;
    global $errTooLarge, $errEXT, $errNotUploaded, $messageSuccess, $errImage;


    $errImageNotSet= $errNotImage=$errImageExist=$errTooLarge= $errEXT= $errNotUploaded= $errImage="";
    $messageSuccess=$messageImageName="";
    $target_dir = "$upimage";
    $g_image = $_FILES["$g_picture"]["name"];
    $target_file = $target_dir . basename($_FILES["$g_picture"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        if(empty($g_image)){
            $errImageNotSet= "you have not selected an image yet, please select an image file you want to upload";
            $error= 1;
        }
        @$check = getimagesize($_FILES["$g_picture"]["tmp_name"]);
        if($check !== false) {
            $messageImageName= "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $errNotImage= "File is not an image.";
            $uploadOk = 0;
        }
    }
// Check if file already exists
    if (file_exists($target_file)) {
        $errImageExist= "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["$g_picture"]["size"] > 5000000) {
        $errTooLarge= "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        $errEXT= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $errNotUploaded= "Sorry, your file was not uploaded.";
        $error =1;
// if everything is ok, try to upload file
    } else {
        if($error!=1) {
            if (move_uploaded_file($_FILES["$g_picture"]["tmp_name"], $target_file)) {
                $messageSuccess= "The file " . basename($_FILES["$g_picture"]["name"]) . " has been uploaded.";
            } else {
                $errImage= "Sorry, there was an error uploading your file.";
            }
        }
        else
        {$errImage= "error has occur, please check and try again";}
    }

}// end of image function

// check if they are login any where else
function verifyLogin()
{
    if (!isset($_SESSION['uid'])) {
        header("Location: index.php");
        exit();
    }
}


// views
function views($category){
    db();
    global $link;
    $sql="SELECT * FROM bookInfo  WHERE category = '$category' ORDER BY id DESC";
    $result_set=mysqli_query($link, $sql);
    while($row=mysqli_fetch_array($result_set)){
        echo '<h2 style="color:#0099bb; font-size:23px;">'.$row['Title'].'</h2>';
        echo '<p>Written by  '.$row["Author"].'</a></p></br>';
        echo '<img src="../../uploads/cover_image/'.$row['image'].'" height="200px" width="430px"/>';
        echo '<p>'.$row['description'].'</p>';
        echo ' <p><a href="../../uploads/pdf_books/'.$row['pdf_file'].' " target="_blank">download file</a>| <a>'.$row["level"].'</a> level</p></br></br></br></br></br>';
    }
}


// show list of available books
function sider(){
    db();
    global $link;
    $select_data = "SELECT Title FROM bookinfo ORDER BY id DESC LIMIT 10";
    $check = $link->query($select_data);
    while($retrieve = $check->fetch_assoc()){
        echo '<ul><li><a href="">'.$retrieve["Title"].'<br></a></li></ul>';
        }
}



    
    
    
   