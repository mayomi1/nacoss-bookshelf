<?php require_once"includes/functions.php" ?>
<!doctype html>
	<html> 
		<head>
			<link rel="shortcut icon" href="images/images-59.jpeg">
			<link rel="stylesheet" href="stylesheet/entrycss.css">
			<title>Welcome Admin.</title>
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
                            <div><a href="index.php">Home</a> </div>|
                            <div><a href="about.php">About Nacoss</a> </div>|
                            <div><a href="contact.php">Contact Us</a></div>

                        </div>
					    <div>
					    	<table style="background-color:#f7f7f7;">
					    		<tr>
					    			<td style="width:6%; padding:10px;">
					    			</td>
					    			<td style="width:69%; margin-top:10px; background-color:#f9f9f9;">
					    				<p><h1 style="color:#000055;  padding:30px; margin-right:38px; font-size:29px; margin-top:-500px;">Meet ur Team.</h1></p></br></br></br></br>
					    				<div style="margin-top:-100px; align: center">
					    					
											<p>
											We are a team that pull resources to make sure computer students in love with the internet can always follow up on their course as Computer Scientists and Engineers.
											Initiated during a SWEP Project at the Department of Computer Science and Engineering, Obafemi Awolowo University, Ile-Ife, Nigeria
											</p>
											
					    				</div>
					    				
									</td>

									<td style="margin-top:60px; color:#000000; padding:20px; padding-bottom:900px; background-color:;">
										<ul type="circle"><h4>Available books for DOWNLOAD</h4>
											<?php sider()?>
									</td>
								</tr>
							</table>
					    </div>

                       <?php require_once "includes/footer.php"?>