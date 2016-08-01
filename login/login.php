<!doctype html>
<html>
<head>
    <link rel="shortcut icon" href="../images/images-59.jpeg">
    <link rel="stylesheet" href="../stylesheet/entrycss.css">
    <title>Welcome Admin.</title>
</head>
<body>
<div class="one">
    <div class="two">
        <div style="background-color:#ffffff;height: 50px;width: 695px;margin-left: 145px;">
            <div class="banner">
                <div class="header">
                    <div class="name">
                        <h3 style="font-size:25px; color:#ffffff; margin-top:-7px;">Nacoss Bookshelf</h3>
                        <p style="font-size:10px; color:#00ffff; margin-top:-22px;">We aim to provide all NACOSSites books Computer Related and more.</p>
                    </div>
                    <div class="nav" style ="margin-top:-27px">
                        <a href="../index.php">Home</a> |
                        <a href="../about.php">About Nacoss</a> |
                        <a href="../contact.php">Contact Us</a>

                    </div>
                </div>
            </div>
            <div>
                <table style="background-color:#f7f7f7;">
                    <tr>
                        <td style="width:6%; padding:10px;">
                        </td>
                        <td style="width:69%; margin-top:10px; background-color:#f9f9f9;">
                            <p><h1 style="color:#000055;  padding:30px; margin-right:38px; font-size:29px; margin-top:-500px;">Login Right Here.</h1></p></br></br></br></br>
                            <div style="margin-top:-100px; align: center">



                                <div id="bo">
                                    <form id="login" method="post" action="loginaction.php">
                                        <p class="over">
                                            <b>Username: </b>
                                            <input type = "text" name = "username" size = "21" required="reqired"/>
                                            <br/><br/>
                                            <b>Password: </b>
                                            <input type = "password" name = "password" size = "21" required="reqired"/>
                                            <br/><br/>
                                            <input id="submit" name="submit" type="submit" value="Login">

                                            <br/>
                                        <p/>
                                    </form>

                                </div>


                            </div>

                        </td>

                        <td style="margin-top:60px; color:#000000; padding:20px; padding-bottom:900px; background-color:;">
                            <ul type="circle"><h4>Available books for DOWNLOAD</h4><li>
                                <?php require_once "../includes/functions.php";
                                sider();
                                ?>

                        </td>
                    </tr>
                </table>
            </div>
            <div style="background-color:#0099bb; height:210px; color:#ffffff;">
                <table>
                    <tr>

                        <td width="50%">
                            <h4>Image Gallery</h4>
                            <img src="../images/download (2).jpg" height="50px" width="50px" border="5px solid #ffffff">
                            <img src="../images/download (3).jpg" height="50px" width="50px" border="5px solid #ffffff">
                            <img src="../images/images (1).jpg" height="50px" width="50px" border="5px solid #ffffff"></br>
                            <img src="../images/images.jpeg" height="50px" width="50px" border="5px solid #ffffff">
                            <img src="../images/download (1).jpg" height="50px" width="50px" border="5px solid #ffffff">
                            <img src="../images/accessories.jpg" height="50px" width="50px" border="5px solid #ffffff"></td>
                        <td width="50%">
                            <h4 style="margin-top:15px;">About</h4>
                            <div style="float:left; margin-top:20px;">
                                <img src="../images/xy.jpg" height="70px" width="70px"></br>
                            </div>
                            <div>
                                <p>Contact us:
                                    Dept. of CSC, OAU, Ile-Ife.
                                    +2348103105402, +2347036725156

                                </p>
                            </div></td>

                    </tr>
                </table>
            </div>
            <div>
                <div class="nav">
                    <a href="../index.php">Home</a>
                    <a href="../about.php">About Nacoss</a>
                    <a href="../contact.php">Contact Us</a>

                    <footer style="text-align:right; margin-top:-20px;">
                        &copy;All Rights Reserved
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
