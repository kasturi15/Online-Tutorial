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
    <link rel="stylesheet" type="text/css" href="aboutusStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<title>ONLINE EXAM | WELCOME</title>
	
  
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
	
	<div class="container" style="text-align: center;">
		<div class ="jumbotron text-center">
			<h1>-Our Motive-</h1>
			<p>To provide free online education to all the student in all over the world</p>
		</div>
	</div>

	<div class = "container" style="text-align: center;">
		<p style="Arial, Helvetica, sans-serif;font-size:20px;">
		Welcome to Online tutorial, your number one source for all kind of Tutorial from Nursury to Higher Secondry.Online Tutorial is an educational technology  based in Jawaharlal Nehru University,New Dehli, India. Started in 2019, it is a platform that offers online education in India. Online Tutorial educators consist of either students who have cleared various exams or mentors who have teaching experience.
		</p>
		<hr>
		<p style="Arial, Helvetica, sans-serif;font-size:20px;">

		We're dedicated to giving you the very best , with a focus on Uniqueness,Good material and Easy to understand.Founded in 2019 by Kasturi Sharma, Mallika Sinha, Pawan Kumar, and Sushant Maji has come a long way from its beginnings in a Lab of School of Computer and System Sciences,Jawaharlal Nehru University, Under the Guidence of Dr. Karan Singh. To provide video tutorial to school students for free of cost.
         The viewers will be from nursery to higher secondary so that they can learn at their own.
         They will be provided with the full documents of the tutorials.
	</p>
</div>

<div class= "container" style="text-align: center;">
		<div class ="jumbotron text-center">
			<h1>-Leadership-</h1>
			<div class="row">
					<div class="col-sm-6">
							<img src="img\kasturi.jpg" class="img-circle img-responsive center-block" alt="Kasturi Sharma" width="200" height="150">
						<h3><b>Kasturi Sharma</b></h3>
						<h4>Co-Founder & CEO</h4>
						<p style="Arial, Helvetica, sans-serif;font-size:15px;">Classroom education in India has stifled many brilliant minds.  With Online Tutorial, India's  education platform, we are changing that.We have on board some of the top educators in the country</p>
					</div>


				<div class="col-sm-6">
					<img src="img\mallika.jpg" class="img-circle img-responsive center-block" alt="Mallika Sinha" width="200" height="150">
					<h3><b>Mallika Sinha</b></h3>
					<h4>Co-Founder & CEO</h4>
					<p style="Arial, Helvetica, sans-serif;font-size:15px;">Classroom education in India has stifled many brilliant minds.  With Online Tutorial, India's  education platform, we are changing that.We have on board some of the top educators in the country</p>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6">
					<img src="img\pawan.jpg" class="img-circle img-responsive center-block" alt="Pawan Kumar" width ="170" height="150">
						<h3><b>Pawan Kumar</b></h3>
					    <h4>Cheif Technology Officer</h4>
					    <p style="Arial, Helvetica, sans-serif;font-size:15px;">Classroom education in India has stifled many brilliant minds.  With Online Tutorial, India's  education platform, we are changing that.We have on board some of the top educators in the country</p>
					</div>


				<div class="col-sm-6">
					<img src="img/sushant.jpg" class="img-circle img-responsive center-block" alt="Sushant Majhi" width="200" height="150">
					<h3><b>Sushant Majhi</b></h3>
					<h4>Chief Revenue Officer</h4>
					<p style="Arial, Helvetica, sans-serif;font-size:15px;">Classroom education in India has stifled many brilliant minds.  With Online Tutorial, India's  education platform, we are changing that.We have on board some of the top educators in the country</p>
					</div>
				</div>

			</div>
		</div>
</div>

<section id="newsletter">
    <div class="container"><br><br><br><br><br><br>
      <h1> Subscribe To Our Newsletter</h1>
      <form>
        <input type="email" placeholder="Enter Email...">
        <button type="submit" class="button_1"> Subscribe </button>
      </form>
      
    </div>

    
  </section> 

	

	<footer>
    <P> © 2019  Social Pvt. Ltd, All rights reserved | Powered by onlinetutorials.com </P>
		
	</footer>

</body>
</html>