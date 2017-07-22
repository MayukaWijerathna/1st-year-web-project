<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>LMS - Learning Management System</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<script language="javascript" type="text/javascript" src="main.js"></script>
	<link rel="stylesheet" type="text/css" href="about2.css">
	<script language="javascript" type="text/javascript" src="about.js"></script>
	<link rel="icon" type="image/png" href="pictures/favicon-16x16.png" sizes="16x16">

</head>
<body>
	<div class="background-wrap">
		<video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" muted="muted">
		<source src="login.mp4" type="video/mp4" >
		</video>
	</div>
	<div id="maindiv">
		
		<div id="navbardiv">
		 	
		 	<div id="navspacediv1">
		 		
		 	</div>

		 	<div id="logodiv1">
		 		<center>
		 		<img id="logo1" src="pictures/logo.png">
		  		</center>
		 	</div>
		 	
		 	<div id="navtispace"></div>
		 	<div id="navtispace1"></div>
		 	
		 	<div id="navtitlediv">
		 		<center><br>Learning Management System</center>
		 	</div>

		 	<a href="home.php" id="navbuttontxt"><div id="navbutton" onmouseover="homebutton()"; onmouseout="mouseleave();">
		 		HOME
		 	</div></a><br>
		 	<a  href="about.php" id="navbuttontxt"><div id="navbutton" onmouseover="aboutbutton()"; onmouseout="mouseleave();">
		 		ABOUT US
		 	</div></a><br>
		 	<a href="service.php" id="navbuttontxt"><div id="navbutton" onmouseover="servicebutton()"; onmouseout="mouseleave();">
		 		SERVICES
		 	</div></a><br>
		 	<a href="student.php" id="navbuttontxt"><div id="navbutton" onmouseover="stubutton()"; onmouseout="mouseleave();">
		 		STUDENT AREA
		 	</div></a><br>
		 	<a href="support.php" id="navbuttontxt"><div id="navbutton" onmouseover="supportbutton()"; onmouseout="mouseleave();">
		 		SUPPORT
		 	</div></a><br><br><hr><br>
		 	<div id="navbutton1">
		 		<?php 
						          if (isset($_SESSION['username'])){
						            echo '<a href="logout.php" id="navbuttontxt1">LOGOUT</a>';

						          }else {
						            echo '<a href="index.php" id="navbuttontxt1">LOGIN</a>';
						          }

						         ?>	
		 	</div><br>
		 	<div id="navbutton2">
		 		<?php 
						          if (isset($_SESSION['username'])){
						            echo '<a href="account.php" id="navbuttontxt">ACCOUNT</a>';

						          }else {
						            echo '<a href="register.php" id="navbuttontxt">REGISTER</a>';
						          }

						         ?>	
		 	</div>
		 	

		</div>
		
		<div id="bodydiv">
				
				<div id="bodydiv1">
					<div id="bodydiv11">

					</div>
					<div id="bodydiv12">
						<div id="bodydiv111"></div>
						<div id="bodydiv112"></div>
						<div id="bodymsgdiv1">
							<a id="msgtxt"></a><br><br><a id="msgtxt1"></a>
						</div>
					</div>
					<div id="bodydiv13">
						<div id="bodydiv13a"></div>
						<div id="bodydiv13b"></div>	
						<div id="bodydiv13c">

							<?php 
						          if (isset($_SESSION['username'])){
						            echo '<img id="userimg" src="pictures/user.png">';
						          }else {
						            echo '<img id="userimg" src="pictures/guest.png">';
						          }

						         ?>
							
						</div>
						<div id="bodydiv13b"></div>
						<div id="bodydiv13d"></div>
						<div id="bodydiv13e"></div>
						<div id="bodydiv13f">
							
								
								<?php 
						          if (isset($_SESSION['username'])){
						            echo '<p id="username">'.$_SESSION['username'].'</p>';
						          }else {
						            echo '<p id="username"> GUEST </p>';
						          }

						         ?>

							
						</div>

					</div>
				</div>


				<div id="bodylinediv1"></div>

				<div id="bodydiv2">
					<div id="bodydiv21"></div><div id="bodydiv23"></div>
					<div id="bodydiva">
						<div id="bmargindiv"></div>
						<div id="bmargindiv3"></div>
						<div id="bmargindiv2">
							<a id="btitle1">ABOUT US</a><br><br>
							<div id="bline1"></div>
							<br><br>
							<p id="bcontent1">
							<b><u>Vision</u></b><br><br>

							To be Sri Lanka’s best performing Graduate School and to be recognized internationally
							</p>
							<p id="bcontent1">
							<b><u>Mission</u></b><br><br>

							To develop globally competitive and responsible graduates that businesses demand, working in synergy with all our stakeholder and contributing to our society
							</p>
							<p id="bcontent1">
							<b><u>Facilities</u></b><br><br>
							NSBM’s objective of opening a fully-fledged university complex is to gift all-rounded individuals to the world. This green university town comprises of ultra-modern facilities for both staff and undergraduates.
							</p><p id="bcontent1">
							The university is equipped with all relevant amenities including highly sophisticated lecture halls, laboratories and library. The students at the university have access to one of the biggest libraries in the country. A very large collection of books is available here and students can gain access to so many e-libraries around the world.
							</p><p id="bcontent1">
							The student center and independent study areas available at the university create an appropriate environment for learning and research. The state-of-the-art auditorium and the open theatre help to create individuals with creativity. The recreation center offers a large variety of activities and recreational pursuits. The sports ground, gymnasium and swimming pool enables the making of well-rounded healthy individuals. Medical center is equipped with many facilities ensuring that the students and the staff get the best service. Students’ hostels are constructed with an ultra-modern touch to them to make the environment study friendly and relaxing for the students. Apartments allocated to staff is of world-class status making the university a fully-fledged working environment. Both students’ accommodation and staff accommodation were set up with the aim of providing not only physical comfort but also psychological comfort which will make teaching-learning process easier. The university also comprises of several cafeterias and a supermarket. A branch of Bank of Ceylon is also located inside the university and all those facilities make this green university a complete university town.</p>
							
						</div>
					</div>
				</div>

				<div id="bodydiv3">
					<div id="bodydiv31"></div>
					<div id="bodydiv32">
						<div id="bodydiv321"></div>
						<div id=navtxtmsgdiv><a id="navtxtmsg">NSBM Green University Town</a></div>
					</div>
					<div id="bodydiv331" onmouseover="backbutton()"; onmouseout="mouseleav();">
						<a href="about.php" id="textnavb"><</a>
					</div>
					<div id="bodydiv34"></div>
					<div id="bodydiv332" onmouseover="nextbutton()"; onmouseout="mouseleav();">
						<a href="about3.php" id="textnavb">></a>
					</div>
				</div>
		</div>

</body>
</html>