<?php
session_start();
if(!isset($_SESSION['uid'])){
    header("Location: index.php");
    exit();
}


require_once "includes/functions.php";

global $g_image, $error, $errImageNotSet, $messageImageName, $errNotImage, $errImageExist;
global $errTooLarge, $errEXT, $errNotUploaded, $messageSuccess, $errImage;


$errImageNotSet= $errNotImage=$errImageExist=$errTooLarge= $errEXT= $errNotUploaded= $errImage="";
$messageSuccess=$messageImageName="";

$detailsErr=$authorErr=$titleErr=$errFile=$errorFile=$errFileExist=$errType=$errLevel="";

$message=$errorOccur="";

if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['submit'])) {
    $title = check($_POST['title']);
    $book_author = check($_POST['book_author']);
    $book_details = check($_POST['book_details']);
    $book_category = check($_POST['book_category']);
    @$Level = check($_POST['Level']);


    if(empty($Level)){
        $errLevel = " please check in a level ";
        $error = 1;
    }


    if(empty($title)){
        $titleErr = " Title is required ";
        $error = 1;
    }


    if (empty($book_author)) {
        $authorErr = " Author name cannot be blank ";
        $error = 1;
    }

    if (empty($book_details)) {
        $detailsErr = " The description cannot be blank ";
        $error = 1;

    }
    /**
     * if(!empty($_FILES)){
     *
     * //var_dump($_FILES);
     *
     * $image_name = $_FILES['upload_cover']['name'];
     * $pdf_name = $_FILES['pdf_file']['name'];
     *
     * move_uploaded_file($_FILES['upload_cover']['tmp_name'], 'uploads/'.$image_name);
     * move_uploaded_file($_FILES['pdf_file']['tmp_name'], 'uploads/'.$pdf_name);
     * }**/
// check image from functions.php

    verifyLogin();//check login again 
    image("uploads/cover_image/", "upload_cover");

// to upload the file i.e the book
    $target_dir = "uploads/pdf_books/";// directory to save the uploaded file
    $file = $_FILES['file']['name'];
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $bookFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//if no file
    if (empty($file)) {
        $errFile = " You must upload a file ";
        $error = 1;
    }


    if (file_exists($target_file)) {
        $errFileExist = " Sorry, file already exists. ";
        $error = 1;
    }
    $weSupport = $bookFileType != "pdf" && $bookFileType != "docx" && $bookFileType != "doc";


    if ($weSupport) {
        $errType = " the file you choose is not supported ::: hints: try pdf, doc or docx files ";
        $error = 1;
    }


    if ($error != 1) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $file)) {
            $messageFile = " your file " . basename($_FILES["file"]["name"]) . " was successfully uploaded ";
        } else {
            $errorFile = " An error occur while uploading please check and try again ";
        }
    }

    verifyLogin();
    if ($error != 1) {
        db();//connect to database
        global $link;
        $sql = "INSERT INTO bookinfo(Author, description, category, image, pdf_file, title, level)
      VALUES ('$book_author', '$book_details', '$book_category', '$g_image', '$file', '$title', '$Level')";


        if (mysqli_query($link, $sql)) {
            $message= "Records added successfully.  <a href='index.php'>click here to view all the books in the shelf</a>";


        } else {
            echo "ERROR: Could not able to execute $sql. "; //. mysqli_error($link);

        }
        mysqli_close($link);
    } else {
        $errorOccur = " an error has occur somewhere please check and try again ";
    }


}
?>








<!doctype html>
<html>
<head>
    <link rel="shortcut icon" href="images/images-59.jpeg">
    <link rel="stylesheet" href="stylesheet/entrycss.css">
    <title>Upload a pdf...</title>
</head>
<body>
<div class="one">
    <div class="two">
        <div style="background-color:#ffffff;height: 50px;width: 85%;margin-left: 110px;">
            <div class="banner">
                <div class="header">
                    <div class="name">
                        <h3 style="font-size:30px; color:#ffffff; margin-top:1px;">Nacoss Bookshelf |<b
                                id="messsage" font size="10px">We aim
                                to provide all NACOSSites books ComputerRelated and more.</b></h3>

                    </div>

                </div>
            </div>
            <div class="nav" id="pagenavi">

                <div><a href="index.php">Home</a></div>
                |
                <div><a href="about.php">About Nacoss</a></div>
                |
                <div><a href="contact.php">Contact Us</a></div>
                |
                <div><a href="login/logout.php">log out</a></div>

            </div>
            <div>
                <table style="background-color:#f7f7f7;">
                    <tr>
                        <td style="width:6%; padding:10px;">
                        </td>
                        <td style="width:69%; margin-top:10px; background-color:#f9f9f9;">
                            <p><h1 style="color:#000055;  padding:30px; margin-right:38px; font-size:29px; margin-top:-300px;">Welcome to Nacoss Bookshelf.</h1></p></br></br></br></br>
                            <div style="margin-top:-100px; align: center">
                                <label>Try to upload two files(any image, PDF)</label>
                                <h3><span class="message"><?php echo $message;?></span></h3>
                                <h3><span class="error"><?php echo $errorOccur ?></span></h3>
                                
                                <br/><br/>
                                <form id="register" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data" >
                                    <ul>

                                        <p>
                                            <span class="error"><?php echo $titleErr; ?></span>
                                            <label for="title">Title: </label>
                                            <input type="text" name="title" id="title"> </p>

                                        <p>
                                            <span class="error"><?php echo $detailsErr; ?></span>
                                            <label for="book_author">Author: </label>
                                            <input type="text" name="book_author" id="book_author"> </p>

                                        <p>
                                            <span class="error"><?php echo $authorErr; ?></span>
                                            <label for="book_details">Description: </label>
                                            <textarea type="text" name="book_details" id="book_details" cols="50" rows="5"></textarea> </p>
                                        <br/>

                                        <p>

                                            <label for="book_category">Book Category: </label>
                                            <Select type="text" name="book_category" id="book_category">
                                                <option>Networking books</option>
                                                <option>Hardware books</option>
                                                <option>software books</option>
                                                <option>lecture notes</option>
                                            </select> </p>
                                        <br/>

                                        <p><span class="error"><?php echo $errLevel; ?></span>
                                            Level:<input type = "radio"  name = "Level" value = "100"/>100
                                            <input type = "radio" name = "Level" value = "200"/>200
                                            <input type = "radio" name = "Level" value = "300"/>300
                                            <input type = "radio" name = "Level" value = "400"/>400
                                            <input type = "radio" name = "Level" value = "500"/>500
                                            <input type = "radio" name = "Level" value = "any"/>any
                                        </p>

                                        <p><label for="upload_cover">Cover Image</label>
                                            <span class="error"><?php echo $errImageNotSet, $messageImageName, $errNotImage, $errImageExist,
                                                 $errTooLarge, $errEXT, $errNotUploaded, $errImage; ?></span>
                                            <input type="file" name="upload_cover" id="upload_cover"> </p>
                                        

                                        <p><label for="pdf_file">Select the PDF to upload: </label>
                                            <span class="error"><?php echo $errFile, $errType,$errorFile, $errFileExist;  ?></span>
                                            <input type="file" name="file" id="pdf_file"> </p>

                                        <p><input type="submit" name="submit" value="Submit"></p>
                                    </ul>
                                </form>
                            </div>






            </td>

            <td style="margin-top:60px; color:#000000; padding:20px; padding-bottom:900px; background-color:;">
                <ul type="circle"><h4>Available books for DOWNLOAD</h4>
                    <?php sider() ?>
            </td>
            </tr>
            </table>
        </div>
       <?php require_once "includes/footer.php"; ?>