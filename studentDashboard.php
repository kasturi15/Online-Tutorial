<?php
    require_once 'connect.php';
    session_start();

    $sql3 = "SELECT * FROM `tutors`";
    $query3 = mysqli_query($con,$sql3);

     if(isset($_SESSION['Id']))
    {
        $Id = $_SESSION['Id'];


    }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="teacherdashboardStyle.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
                    <li><a href="studentDashboard.php"><?php echo $Id; ?></a> </li>
                    <li> <button><a href="disconnect.php">Logout</a></button></li>
                </ul>    
            </nav>

            
        </div>
    </header>


	<div class="container">
			<div class="jumbotron ">
				<h2>Student Dashboard</h2>
			</div>
	</div>

	<div class="container-fluid pb-video-container">
    <div class="col-md-10 col-md-offset-1">
        <h3 class="text-center">Continue Watching...</h3>
        	<div class="row pb-row">
            <div class="col-md-3 pb-video">
            	<video class="pb-video-frame" width="100%" height="240" ><source src="uploads\Class 6\Geography\Earth in the Solar System.mp4" type="video/mp4"   frameborder="0" allowfullscreen></video>
                	<label class="form-control label-warning text-center"><a href="studentPlay.php?id=12">Chapter 1- Earth in Solar System</a></label>
                <h3><p class="text-success">Last Watched</p></h3>

            </div>
            <div class="col-md-3 pb-video">
                <video class="pb-video-frame" width="100%" height="240"><source src="uploads\Class 9\History\French Revolution.mp4" frameborder="0" allowfullscreen></video> 

                <label class="form-control label-warning text-center"><a href="studentPlay.php?id=8">Chapter 1-French Revolution</a></label>
                <h3><p class="text-success">Watched Previously</p></h3>
                    
            </div>

            <!--div class="col-md-3 pb-video">
                <video class="pb-video-frame " width="100%" height="230" controls><source src="video3.mp4"  frameborder="0" allowfullscreen></video>
                <label class="form-control label-warning text-center">Biology</label>
                <h3><p class="text-success">this is test sentence.</p></h3>
                    <h4><p class="text-muted">This text is muted.</p></h4>
            </div-->

            <!--div class="col-md-3 pb-video">
                <video class="pb-video-frame" width="100%" height="230" controls><source src="video4.mp4" frameborder="0" allowfullscreen></video>
                <label class="form-control label-warning text-center">Chemisry</label>
                <h3><p class="text-success">this is test sentence.</p></h3>
                    <h4><p class="text-muted">This text is muted.</p></h4>
            </div-->
        </div>
    </div>
</div>

p<footer>
    <P> © 2019  Social Pvt. Ltd, All rights reserved | Powered by onlinetutorials.com </P>
        
    </footer>

</body>
</html>