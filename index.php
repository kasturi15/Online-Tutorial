<?php
	require_once 'connect.php';

	$sql = "SELECT * FROM `tutors`";
	$query = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ONLINE EXAM | WELCOME</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1><a href="index.php"><span class="highlight">ONLINE</span> TUTORIALS</a> </h1>	
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
      							<hr><a href="becomeTutor.html">Become a Tutor</a>
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

	<section id="showcase">
		<div id="snow_fall">
			<div class="bgimage">
				<div class="container">
					<h1> Your ultimate destination for online learning</h1>
					<p> Prepare candidates to perform extraordinarily with an easy to use highly interactive platform and simplify the learning cycle.</p>
					<button id="buttonone"><a href="demo.php?id=8"> WATCH OUR VIDEO</a> </button>
				</div>
			</div>
			<script type="text/javascript" src="particles.js"></script>
			<script type="text/javascript" src="app1.js"></script>	
		</div>	
	</section>

	<section id="newsletter">
		
		<div class="container">
			<h1> Subscribe To Our Newsletter</h1>
			<form>
				<input type="email" placeholder="Enter Email...">
				<button type="submit" class="button_1"> Subscribe </button>
			</form>
		</div>
	</section>

	<section id="boxes">

		<div class="box">
			<h3 > Create Questions </h3>
	    </div>

		<div class="box">
			<h3> Design Test </h3>
		</div>

		<div class="box">
			<h3> Assign Test </h3>
		</div>

		<div class="box">
			<h3> Generate Result </h3>
		</div>
		
	</section>

	<section id="works">
		<div class="work">
			<h4> Easy to learn and use </h4>
			<p> One-stop-destination for examination, preparation, recruitment, and more. Specially designed online examination system to solve all your preparation worries. The platform is smooth to use with a translational flow of information. </p>
		</div>

		<div class="work">
			<h3> Highly interactive interface </h3>
			<p> A click to the next trick, simple registration, signing- in, synchronized processing, secured encoding and decoding of information and more. </p>
		</div>

		<div class="work">
			<h3> Advanced reporting system  </h3>
			<p> Instant scorecard generation, computational analysis, efficient feedback sharing to boost up your performance and precision. An ultimate combination of detailed and drilled methodologies that will eventually complement your skills and grades. </p>
		</div>

		<div class="work">
			<h3> Splendid support  </h3>
			<p> Your request and our actions to strive triggered support. A dedicated team is working round the clock to provide 24 X 7 streamlined access to our technical experts . </p>
		</div>

		<div class="work">
			<h3> Smart subscription </h3> 
			<p> Premium selection to the suited subscription that will match your preferences and priorities of using the online assessment platform. </p>
		</div>

		<div class="work">
			<h3> Active accessibility </h3>
			<p> Go wherever you want to and practice whenever you want, using the next level online exam platform. Experience a lag-free synchronized performance of think exam on your mobile devices. </p>
		</div>	
	</section>

	<div class="footer">
		<p> © 2018 Ginger Webs Pvt. Ltd, All rights reserved | Powered by onlineexam.com </p>
		
	</div>

</body>
</html>