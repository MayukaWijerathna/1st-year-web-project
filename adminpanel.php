<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
    
	<link rel="stylesheet" type="text/css" href="adminpanel.css">
</head>
<body>
	<div id="maindiv">
		<?php 									 
			if (isset($_SESSION['admin'])){
				echo '
			<div id="hspace1"></div>
			<div id="catbox">
				
				<div id="hspace2"></div>
				<div id="catbox1">
				<center>
				<h1 id="headtitle">ADMIN PANEL</h1>
                Username : '.$_SESSION['admin'].'
				<br><br>
                <a id="bt1" href="logout.php">|| DISCONNECT ||</a>
                
				</center>
				</div>
				<div id="hspace2"></div>
				<div id="catbox1">

					<center>
		                <h2>Event Update</h2>
		                <form action="eventserver.php" method="post">
		                <table>
		                <tr>
		                <td>Event Number : </td>
		                <td>
		                <select id="input1" name="eventno">
		    											<option value="1">Event 01</option>
		    											<option value="2">Event 02</option>
		   												<option value="3">Event 03</option>
		   												<option value="4">Event 04</option>
		   												<option value="5">Event 05</option>
										</select>
						</td>
						</tr>
						<tr>
						<td>Event Title : </td>
						<td><input type="text" name="eventtitle" placeholder="The Event" maxlength="20"></td>
						</tr>
						<tr>
						<td>Time : </td>
						<td><input type="text" name="eventtime" placeholder="00.00 AM" maxlength="8"></td>
						</tr>
						<tr>
						<td>Venue : </td>
						<td><input type="text" name="eventvenue" placeholder="The Place" maxlength="40"></td>
						</tr>
						<tr>
						<td>Description : </td>
						<td><input type="text" name="eventdescription" placeholder="use <br> for line breaks"></td>
						</tr>
						<tr>
						<td><input type="submit" value="Update Database"/></td>
						<td><input type="reset" value="Reset"/></td>
						</tr>
						</table>
						</form>
					</center>

				</div>
				<div id="hspace2"></div>
				<div id="catbox1">

					<center>
		                <h2>News Update</h2>
		                <form action="newsserver.php" method="post">
		                <table>
		                <tr>
		                <td>Event Number : </td>
		                <td>
		                <select id="input1" name="newsno">
		    											<option value="1">News 01</option>
		    											<option value="2">News 02</option>
		   												<option value="3">News 03</option>
		   												<option value="4">News 04</option>
		   												<option value="5">News 05</option>
										</select>
						</td>
						</tr>
						<tr>
						<td>News Title : </td>
						<td><input type="text" name="newstitle" placeholder="The News" maxlength="20"></td>
						</tr>
						<tr>
						<td>Description : </td>
						<td><input type="text" name="newsdes" placeholder="use <br> for line breaks" maxlength="250"></td>
						</tr>
						<tr>
						<td><input type="submit" value="Update Database"/></td>
						<td><input type="reset" value="Reset"/></td>
						</tr>
						</table>
						</form>
					</center>

				</div>
				<div id="hspace2"></div>

			</div>
			<div id="hspace1"></div>
			<div id="catbox">
				
				<div id="hspace2"></div>
				<div id="catbox2">
				<center>
					<br><br><br><br>
					<h2>Add New User</h2>
                    <br>
					<form action="server.php" method="post">
							<table>
  								<tr>
    							<td>Username : </td>
    							<td><input type="text" name="username" maxlength="8" placeholder="Username"></td>
  								</tr>
                                <tr><td><br><br></td></tr>
  								<tr>
    							<td>Student Id : </td>
    							<td><input type="text" name="id" maxlength="20" placeholder="BSC-XXX-XXX-00.0-000"></td>
  								</tr>
                                <tr><td><br><br></td></tr>
  								<tr>
    							<td>Password : </td>
    							<td><input type="password" name="password" maxlength="15" placeholder="Password"></td>
  								</tr>
                                <tr><td><br><br></td></tr>
  								<tr>
    							<td>Faculty : </td>
    							<td>
  								<select name="faculty">
    											<option value="1">School of Computing</option>
    											<option value="2">School of Business</option>
   												<option value="3">School of Engineering</option>
								</select>
								</td>
								</tr>
                                <tr><td><br><br></td></tr>
								<tr>
    							<td>Email : </td>
    							<td><input type="text" name="email" maxlength="30" placeholder="user@web.com"></td>
  								</tr>
  								<tr><td><br><br></td></tr>
  								<tr>
    							<td>Phone : </td>
    							<td><input type="text" name="phone" maxlength="10" placeholder="07XXXXXXXX"></td>
  								</tr>
                                <tr><td><br><br></td></tr>
  								<tr>
								<td><input type="submit" value="Register"></td>
								</tr>
								</table>
						</form>

				</center>                
                </div>
				<div id="hspace2"></div>

			</div>
			<div id="hspace1"></div>
			<div id="catbox">
				
				<div id="hspace2"></div>
				<div id="catbox2">
                <center>
					<br><br><br><br>
					<h2>Update User</h2>
                <br>
                <table>
						    	<form action="upac1.php" method="post">
  								<tr>
                                <td>Student ID : </td>
                                <td><input type="text" name="id" maxlength="20" placeholder="BSC-XXX-XXX-00.0-000"/></td>
                                </tr>
                                <tr>
    							<td>Username : </td>
                                <td><input type="text" name="username" maxlength="8" placeholder="Username"/></td>
    							<tr><td><input type="submit" value="Update"/></td></tr>
    							</tr>
                                <tr><td><br><br></td></tr>
  								</form>
  								<form name="reg" action="upac2.php" method="post">
                                <tr>
                                <td>Student ID : </td>
                                <td><input type="text" name="id" maxlength="20" placeholder="BSC-XXX-XXX-00.0-000"/></td>
                                </tr>
  								<tr>
    							<td>Password : </td>
    							<td><input type="text" name="password" maxlength="15" placeholder="Password"/></td>
    							<tr><td><input type="submit" value="Update"/></td></tr>
  								</tr>
  								</form>
                                <tr><td><br><br></td></tr>
  								<form name="reg" action="upac3.php" method="post">
                                <tr>
                                <td>Student ID : </td>
                                <td><input type="text" name="id" maxlength="20" placeholder="BSC-XXX-XXX-00.0-000"/></td>
                                </tr>
								<tr>
    							<td>Email : </td>
    							<td><input type="text" name="email" maxlength="30" placeholder="user@web.com"/></td>
  								<tr><td><input type="submit" value="Update"/></td></tr>
  								</tr>
  								</form>
                                <tr><td><br><br></td></tr>
  								<form name="reg" action="upac4.php" method="post">
                                <tr>
                                <td>Student ID : </td>
                                <td><input type="text" name="id" maxlength="20" placeholder="BSC-XXX-XXX-00.0-000"/></td>
                                </tr>
  								<tr>
    							<td>Phone : </td>
    							<td><input type="text" name="phone" maxlength="10" placeholder="07XXXXXXXX"/></td>
  								<tr><td><input type="submit" value="Update"/></td></tr>
  								</tr>
  								</form> 								
  							</table>
                </center>
                
                </div>
				<div id="hspace2"></div>

			</div>
			<div id="hspace1"></div>
			<div id="catbox">
				
				<div id="hspace2"></div>
				<div id="catbox1">
                
                <center>
                    <br><br>
		                <h2>Support Tickets</h2>
                        <br>
                        <a id="bt1" href="support" target="blank"> || SHOW ALL SUPPORT TICKETS ||</a>
                        <br><br>
                        Submit your answer in the text file.
                </center>                
                
                </div>
				<div id="hspace2"></div>
				<div id="catbox1">
                
                 <center>
                    <br><br>
		                <h2>Assignments</h2>
                        <br>
                        <a id="bt1" href="assignments" target="blank"> || SHOW ALL ASSIGNMENTS ||</a>
                        <br><br>
                        Index number is shown as folder name.
                </center>
                
                </div>                
				<div id="hspace2"></div>
				<div id="catbox1">
                    <br>
                        <center>
		                <h2>ADMIN CONTROLS</h2>
                        <br>
                        <table>
						    	<form action="adminsev1.php" method="post">
  								<tr>
                                <td>Username : </td>
                                <td><input type="text" name="admin" maxlength="6" placeholder="Admin"/></td>
                                <td><input type="submit" value="Update"/></td>
                                </tr>
                                </form>
                                <form action="adminsev2.php" method="post">
                                <tr>
    							<td>Password : </td>
                                <td><input type="password" name="passkey" maxlength="20" placeholder="Password"/></td>
    							<td><input type="submit" value="Update"/></td>
    							</tr>
                        </table>
                        </center>
                
                </div>
				<div id="hspace2"></div>

			</div>';
			 }
			else{

	          	echo '
	          		<br><br><br><br><br><br>
					<center><h1>ACCESS DENIED!</h1>
					<br><br>
					<a id="bt1" href="index.php">|| CONNECT ||</a>
					</center>';

				}
				?>


	</div>
</body>
</html>