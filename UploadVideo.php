<?php

		require_once 'connect.php';
		session_start();
		$sql3 = "SELECT * FROM `tutors`";
    $query3 = mysqli_query($con,$sql3);
		if(isset($_SESSION['tutorName']))
    	{
	        $username = $_SESSION['tutorName'];
	    
	        $sql= "SELECT * FROM  `tutors` WHERE `tutorUserName` = '$username' ";
	        $result= mysqli_query($con, $sql);
	        $value = $result->fetch_assoc();
	        $tId = $value['tutorId'];
	        $tname = $value['tutorName'];

	        if (isset($_POST['submit'])) {
			# code...
				$title = $_POST['videoName'];
				$class = $_POST['class'];
				$subject = $_POST['subject'];
				$name = $_FILES['file']['name'];
				$temp = $_FILES['file']['tmp_name'];

				move_uploaded_file($temp,"uploads/".$class."/".$subject."/".$name);
				$sql = "INSERT INTO `videos`(`videoId`, `videoName`, `class`, `subject`, `link`, `tutorId`) VALUES ('','$title','$class','$subject','$name','$tId')";
				if(mysqli_query($con,$sql))
				{
					echo "Submitted to database";
				}
				else
					echo "NHi submit hua";
			}
    	}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="UploadVideoStyleSheet.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>ONLINE EXAM | WELCOME</title>
	
</head>
<body>
<header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">ONLINE</span> TUTORIALS</h1>   
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
                    <li><a href="teacherDashboard.php"><?php echo $tname; ?></a></li>
                    <li> <button><a href="disconnect.php">Logout</a></button></li>
                </ul>    
            </nav>
        </div>
    </header>
	
	<div class="container">
		<div class ="jumbotron text-center" style="text-align: center;">
			<p class="text-success"><h1>-Upload-</h1></p>
		</div>
	</div>
	<div class="container">
		<hr>
	</div>
	<div class="row">
		<div class="container">
			<form action="UploadVideo.php" method="post" enctype="multipart/form-data">
				<label for="Enter the title">Enter the title</label>
				<input type="text" id="videoName" name="videoName" placeholder="Video Name">

				<label for="class">Class</label>
				<select id="class" name="class">
					<option value="Class 1">Class 1</option>
					<option value="Class 2">Class 2</option>
					<option value="Class 3">Class 3</option>
					<option value="Class 4">Class 4</option>
					<option value="Class 5">Class 5</option>
					<option value="Class 6">Class 6</option>
					<option value="Class 7">Class 7</option>
					<option value="Class 8">Class 8</option>
					<option value="Class 9">Class 9</option>
					<option value="Class 10">Class 10</option>
				</select><br><br>
		
		<label for="subject">Subject</label>
				<select id="subject" name="subject">
					<option value="English Literature">English Literature</option>
					<option value="English Language">English Language</option>
					<option value="Hindi">Hindi</option>
					<option value="Maths">Maths</option>
					<option value="Physics">Physics</option>
					<option value="Chemistry">Chemistry</option>
					<option value="Biology">Biology</option>
					<option value="History">History</option>
					<option value="Civics">Civics</option>
					<option value="Geography">Geography</option>
				</select><br><br>
				<label for="Select the file">Select the file: </label>
					<input type="file" id="file" name="file" placeholder="File"><br><br>
		<button type="submit" class="btn btn-info" name="submit" value="Upload">Upload</button>
	</form>
</div>
</div>

</body>
</html>