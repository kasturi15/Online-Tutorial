<?php

    require_once 'connect.php';
    $sql3 = "SELECT * FROM `tutors`";
    $query3 = mysqli_query($con,$sql3);
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql= "SELECT * FROM  `tutors` WHERE `tutorId` = '$id' ";
        $result= mysqli_query($con, $sql);
        $value = $result->fetch_assoc();
        $tname = $value['tutorName'];
        $tid = $value['tutorId'];

        $sql1 = "SELECT * FROM `videos` WHERE `tutorId`='$tid'";
        $result1 =mysqli_query($con,$sql1);
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
			<div class="jumbotron text-center">
				<h2><?php echo $tname ; ?></h2>
			</div>
	</div>

    <div class="container-fluid pb-video-container">
        <div class="col-md-10 col-md-offset-1">
            <h3 class="text-center">Video Gallery</h3>
            <div class="row pb-row">
            <?php
                while ($value1 = mysqli_fetch_assoc($result1)) {
                            # code...
                    $id = $value1['videoId'];
                    $path = "uploads/".$value1['class']."/".$value1['subject']."/".$value1['link'];
                    echo "<div class='col-md-3 pb-video'>";
                    echo "<video class='pb-video-frame' width='100%' height='240'><source src='".$path."' type='video/mp4'   frameborder='0' ></video>";
                    echo "<label class='form-control label-warning text-center'><a href='videoPlay.php?id=$id'>".$value1['videoName']."</a></label>";
                    echo "</div>";
                } 
            ?>

            </div>
        </div>
    </div>

<style>
    .pb-video-container {
        padding-top: 20px;
        background: #bdc3c7;
        font-family: Lato;
    }

    .pb-video {
        border: 1px solid #e6e6e6;
        padding: 5px;
    }

        .pb-video:hover {
            background: #2c3e50;
        }

    .pb-video-frame {
        transition: width 2s, height 2s;
    }

        .pb-video-frame:hover {
            height: 300px;
        }

    .pb-row {
        margin-bottom: 10px;
    }
</style>
<footer>
    <P> © 2019  Social Pvt. Ltd, All rights reserved | Powered by onlinetutorials.com </P>
        
    </footer>

</body>
</html>