<?php 
require_once "../../includes/functions.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../stylesheet/entrycss.css">
    <title>Lecture Notes.</title>
</head>
<body>


<div class="one">
    <div class="two">
        <div style="background-color:#ffffff;;width: 85%;margin-left: 110px;">
            <div class="banner">
                <div class="header">
                    <div class="name">
                        <h3 style="font-size:30px; color:#ffffff; margin-top:1px;">DEPARTMENTAL LIBRARY |<b
                                id="messsage" font size="10px">We aim
                                to provide all NACOSSites books ComputerRelated and more.</b></h3>

                    </div>

                </div>
            </div>
            <div class="nav" id="pagenavi">
                <div><a href="../../index.php">Home</a></div>
                |
                <div><a href="../../about.php">About us</a></div>
                |
                <div><a href="../../contact.php">Contact Us</a></div>

            </div>

                        <p><h1 style="color:#000055; background-color:#e3e3e3; padding:30px; margin-right:38px; font-size:29px; border:2px solid #c3c3c3;">lecture notes</h1></p></br></br></br></br>




                        <table style="background-color:#f7f7f7;">
                            <tr>
                                <td style="width:6%; padding:10px;">
                                </td>
                                <td style="width:69%; margin-top:10px; background-color:#f9f9f9;">
                                    <?php
                                    /** this view is powered from functions.php inside include
                                     * @args it takes the caterogy one want to display as it param
                                     * @param = lecture notes in this case
                                     */
                                    views("lecture notes");
                                    ?>

                                </td>

                                <td style="margin-top:60px; color:#000000; padding:20px; padding-bottom:900px; background-color:;">

                                    <span><h4>Available books</h4></span>
                                    <?php
                                    sider()
                                    ?>
                                </td>
                            </tr>

                        </table></div>

<?php require_once "../../includes/footer.php"; ?>