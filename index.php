<?php require_once "includes/functions.php"?>
<!doctype html>
	<html> 
		<head>
			<link rel="shortcut icon" href="images/images-59.jpeg">
			<link rel="stylesheet" href="stylesheet/entrycss.css">
			<title>WELCOME TO DEPARTMENTAL LIBRARY.</title>
		</head>
		<body>
			<div class="one">
				<div class="two">
					<div style="background-color:#ffffff;height: 50px;width: 85%;margin-left: 110px;">
						<div class="banner">
							<div class="header">
								<div class="name">
									<h3 style="font-size:30px; color:#ffffff; margin-top:1px;">DEPARTMENTAL LIBRARY |<b id="messsage"font size="10px">We aim
                                        to provide all NACOSSites books ComputerRelated and more.</b></h3>

								</div>
								
							</div>
					    </div>
						<div class="nav" id="pagenavi" >

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
					    				<p><h1 style="color:#000055;  padding:30px; margin-right:38px; font-size:29px; margin-top:20px;">Welcome to Departmental Library.</h1></p></br></br></br></br>
					    				<div style="margin-top:-100px; align: center">
					    					
											<div id="section">
											<table class="eskay" type="circle">
											<tr>
											<th><a id="hard" href="views/hardware/">
												<img src="images/download.jpg" alt="hardware" class="img-responsive"></a>
												</th>
												<td>
												<h2 class = "linkHead"style="text-align:left";><a id="hard"href="views/hardware/"><b>Hardware Books</b></a></h2>
												<p>
												Learn the fundamental of circuit, system, and software. To view books or download, click <a id="hard"href="views/hardware/">HERE</a>
												</p></td>
											</tr>
											</table>
											
											<table class="eskay" type="circle">
											<tr>
                                                <th>
                                                    <a id="soft" href="views/software/">
                                                        <img src="images/stock-photo-syntax-word-cloud-concept-290359220.jpg"
                                                             align="left" alt="software" ></a>

                                                </th>
                                                <td>

												<h2 class = "linkHead" style=" align:left"><a id ="soft" href="views/software/">Software Books</a></h2>

                                                    <p>
                                                        Wanna learn cool stuff about softwae like hacking and
                                                        programming?
                                                        click <a id="hard" href="views/software/">HERE</a>
												</p>
												</td>
											</tr>
											</table>

											<table class="eskay" type="circle">
											<tr>
											<th>
                                                <a id="hard" href="views/lecture_notes/">
												<img src="images/stock-photo-photo-of-html-code-with-marker-136671032.jpg" align="left"alt="lecturenotes" ></a>
												</th>
												<td>
												<h2 class="linkHead" style="text-align:left" ><a id="hard" href="views/lecture_notes/">Lecture Notes</a></h2>
												<p>
												Check out copies of your lecture notes whenever you deliberately or indeliberately mis classes <a id="hard"href="views/lecture_notes/">HERE</a>
												</p>
												</td>
											</tr>
											</table>

											<table class="eskay" type="circle">
											<tr>
                                                <th>
                                                    <a id="netw" href="views/networking/">
                                                        <img src="images/network.jpg" align="right" alt="networking"
                                                             width="200px" height="100px"></a>
                                                </th>
                                                <td>
												<h2 class="linkHead" style=text-align:"left"><a id ="soft" href="views/networking/">Networking Books</a></h2>

                                                <p>


												Connecting mwny computers together for the purposes of sharing resources on the internet, printer or a file server. To learn more about this, click <a id="hard"href="view_networking.php">HERE</a>
												</p>
												</td>
											</tr>
											</table>

										</div>

<!--<div id= "footer">
	<i><span style = "color:#df88ef" text-align="left">We say KEEP READING ON...</span></i>
	<address>
		Contact us:		
			Dept. of CSE, OAU, Ile-Ife.
			+2347559484988, +2345668798788
	</address>
	<p id="rights"><b>&copy;All Rights Reserved</b></p>
</div>-->

											
					    				</div>
					    				
									</td>

                                    <td style="margin-top:60px; color:#000000; padding:20px; padding-bottom:900px; background-color:;">

                                        <span><h4>Available books</h4></span>
                                        <?php
										sider();
                                          ?>
                                    </td>
								</tr>
							</table>
					    </div>

					<?php require_once "includes/footer.php"?>
