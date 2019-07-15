<?php
	require_once 'connect.php';

	$sql = "SELECT * FROM `tutors`";
	$query = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>ONLINE EXAM | WELCOME</title>
	<link rel="stylesheet" type="text/css" href="contactUsStyle.css">
	
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1><span class="highlight">ONLINE</span> TUTORIALS </h1>	
			</div>
			<nav>
				<ul>
					<li><div class="dropdown">
    						<button class="dropbtn"><a href="index.php">Home </a>
      							<i class="fa fa-caret-down"></i>
    						</button>
    						<div class="dropdown-content">
      							<a href="aboutus.php">About Us</a>
      							<a href="contact.php">Contact Us</a>
    						</div>
  						</div> 

					</li>
					<li>
						<div class="dropdown">
    						<button class="dropbtn">Tutors 
      							<i class="fa fa-caret-down"></i>
    						</button>
    						<div class="dropdown-content">
      							<?php
    								while ($row=mysqli_fetch_assoc($query)) 
									{
										$tutorId = $row['tutorId'];
										$name =$row['tutorName'];
										echo "<a href='teacherProfile.php?id=$tutorId'>$name</a>";
									}
								?>
      							<hr><a href="#">Become a Tutor</a>
    						</div>
  						</div> 
					</li>
					<li> 
						<div class="dropdown">
    						<button class="dropbtn">Courses 
      							<i class="fa fa-caret-down"></i>
    						</button>
    						<div class="dropdown-content">
      							<a href="subjects.php?class=1">Class 1</a>
      							<a href="subjects.php?class=2">Class 2</a>
      							<a href="subjects.php?class=3">Class 3</a>
      							<a href="subjects.php?class=4">Class 4</a>
      							<a href="subjects.php?class=5">Class 5</a>
      							<a href="subjects.php?class=6">Class 6</a>
      							<a href="subjects.php?class=7">Class 7</a>
      							<a href="subjects.php?class=8">Class 8</a>
      							<a href="subjects.php?class=9">Class 9</a>
      							<a href="subjects.php?class=10">Class 10</a>
    						</div>
  						</div> 
  					</li>
					<li> <button id="myBtn">Sign In</button></li>
				</ul>

				<!-- Trigger/Open The Modal -->


            	<div id="myModal" class="modal">
              		<!-- Modal content -->
            		<div class="modal-content">
              			<span class="close">&times;</span>
                		<form class="boxlog" action="login.php" method="post">
	                		<div class="heading"><h1>WELCOME TO Online Tutorials</h1></div>
	                  		<h4>Enroll in courses and watch lessons from India's best educators</h4>
	                		<div class="btn-group">
	                    		<button class="btn1"><span>Google</span></button>
	                    		<button class="btn2"><span>Facebook</span></button>
	                		</div>
		                	<div class="signup">
			                	<h2>Login</h2>
			                	<input type="text" name="username" placeholder="Username">
								<input type="Password" name="password" placeholder="Password">
								<input type="submit" name="sign" value="sign">
		                	</div>
	                		<p class="term">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
	                		<p style="color: #000;">Don't have an account? <a href="signup.html" style="color:dodgerblue">Sign up</a></p>
              			</form>
              		</div>
            	</div>
            	<script type="text/javascript" src="modal.js"></script>		
			</nav>

			
		</div>
	</header>



	<div class="container">
		<div class ="jumbotron text-center" style="text-align: center;">
			<h1>-CONTACT US-</h1>
			<p><b>Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you</b></p>
		</div>
	</div>
	<div class="row">
			<div class="container">
				<div class ="jumbotron text-center">
					<form action="action_page.php">
					<label for="fname">First Name</label>
					<input type="text" id="fname" name="firstname" placeholder="Your name..">
					<label for="lname">Last Name</label>
					<input type="text" id="lname" name="lastname" placeholder="Your last name..">
					<label for="email">Email</label>
					<input type="email" id="email" name="Email" placeholder="Your email id">

	   		 		<label for="country">Country</label>
	    			<select id="country" name="country">
	      			<option value="australia">Australia</option>
	      			<option value="canada">Canada</option>
	      			<option value="usa">USA</option>
	      			<option value="india">India</option>
	      			<option value = "nepal">Nepal</option>
    			</select>

		    	<label for="subject">Subject</label>
		    	<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    		<button type="button" class="btn btn-info" value= "Submit">Send Message</button>


  				</form>
		</div>
		</div>
	</div>
	<div class="row">
		<div class="container">
			<div class="jumbotron text-center">
				<h4>You can find our address in map</h4>
				<div class="mapouter"><div class="gmap_canvas"><iframe width="982" height="751" id="gmap_canvas" src="https://maps.google.com/maps?q=jawahrlal%20nehru%20university&t=k&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Werbung: <a href="https://www.jetzt-drucken-lassen.de">jetzt-drucken-lassen.de</a></div><style>.mapouter{position:relative;text-align:right;height:751px;width:982px;}.gmap_canvas {overflow:hidden;background:none!important;height:751px;width:982px;}</style></div>
    
	</div>


</div>



	<footer>
    <P> © 2019  Social Pvt. Ltd, All rights reserved | Powered by onlinetutorials.com </P>
		
	</footer>

</body>
</html>
</body>
</html>
