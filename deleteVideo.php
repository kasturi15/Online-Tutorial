<?php
    require_once 'connect.php';
    session_start();

     if(isset($_SESSION['tutorName']))
    {
        $username = $_SESSION['tutorName'];
    
        $sql= "SELECT * FROM  `tutors` WHERE `tutorUserName` = '$username' ";
        $result= mysqli_query($con, $sql);
        $value = $result->fetch_assoc();
        $tname = $value['tutorName'];
        $tid = $value['tutorId'];

        $sql1 = "SELECT * FROM `videos` WHERE `tutorId`='$tid'";
        $result1 =mysqli_query($con,$sql1); 

        if (isset($_POST['Delete'])) {
			# code...
			if(isset($_GET['id']))
  			{
    			$id = $_GET['id'];

    			$sql2 = "DELETE FROM `videos` WHERE `videoId` = '$id' ";
    			if(mysqli_query($con,$sql2))
				{
					echo "Deleted from database";
					header('location: deleteVideo.php');
				}
				else
				{
					echo "NHi Delete hua";
					header('location: deleteVideo.php');
				}
			}	
		}
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
	<title>Delete Videos</title>
	
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
                                <a href="aboutus.html">About Us</a>
                                <a href="contact.html">Contact Us</a>
                            </div>
                        </div> 

                    </li>
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">Tutors 
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="#">Kasturi Sharma</a>
                                <a href="#">Mallika Sinha</a>
                                <a href="#">Pawan Kumar</a>
                                <a href="#">Sushant Maji</a><hr>
                            </div>
                        </div> 
                    </li>
                    <li> 
                        <div class="dropdown">
                            <button class="dropbtn">Courses 
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="subjects.html">Class 1</a>
                                <a href="subjects.html">Class 2</a>
                                <a href="subjects.html">Class 3</a>
                                <a href="subjects.html">Class 4</a>
                                <a href="subjects.html">Class 5</a>
                                <a href="subjects.html">Class 6</a>
                                <a href="subjects.html">Class 7</a>
                                <a href="subjects.html">Class 8</a>
                                <a href="subjects.html">Class 9</a>
                                <a href="subjects.html">Class 10</a>
                            </div>
                        </div> 
                    </li>
                    <li><a href="teacherDashboard.php"><?php echo $tname; ?></a> </li>
                    <li> <button><a href="disconnect.php">Logout</a></button></li>
                </ul>    
            </nav>
        </div>
    </header>
    <div class="container" style="padding-top: 50px;">
	<table class="table table-bordered">
		<tr>
			<th>Serial No.</th>
			<th>Video Title</th>
			<th>Class</th>
			<th>Subject</th>
			<th>Delete</th>
		</tr>

		<?php
			$count=1;
			while ($value1 = mysqli_fetch_assoc($result1)) {
				# code...
				echo "<tr>";
				$videoId = $value1['videoId'];
				echo "<td>".$count."</td>";
				echo "<td>".$value1['videoName']."</td>";
				echo "<td>".$value1['class']."</td>";
				echo "<td>".$value1['subject']."</td>";
				echo "<td><form action='deleteVideo.php?id=$videoId' method='post' >
						<input type='submit' name='Delete' value='Delete'>
					</form></td>";
				echo "</tr>";
				$count =$count+1;
			}
		?>

		
	</table>
	</div>
</body>
</html>