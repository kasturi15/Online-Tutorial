<?php
  require_once 'connect.php';
  $sql3 = "SELECT * FROM `tutors`";
  $query3 = mysqli_query($con,$sql3);
  if(isset($_GET['class']))
    {
      $class = $_GET['class'];
      if ($class==6 || $class==7 || $class==8 || $class==9 || $class==10) {
        $subject=array("English Literature","English Language","Hindi","Maths","Physics","Chemistry","Biology","History","Civics","Geography" );
      }

      if ($class==1 || $class==2 || $class==3 || $class==4 || $class==5) {
        $subject=array("English Literature","English Language","Hindi","Maths","Science","Social Studies" );
      }

    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ONLINE EXAM | WELCOME</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="subjectsStyle.css">
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
                    while ($row=mysqli_fetch_assoc($query3)) 
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

  <div class="content">
    
    <h1>Subjects List</h1>

      <div class="grid-container" id="subjects">
        <?php
          $arrlength = count($subject);

          for($x = 0; $x < $arrlength; $x++) {
              $sub = $class.$x;
               echo "<div><a href='videoList.php?sub=$sub'>".$subject[$x]."</a></div>";
          }
        ?>
      </div>
  </div>
</body>
</html>