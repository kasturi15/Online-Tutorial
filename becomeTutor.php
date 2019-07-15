<?php
		require_once 'connect.php';

		/*if (isset($_SESSION['Id'])) {
			# code...
			header('location: index.php');
		}*/

		if ($_POST) {
			# code...
			$name = $_POST['fullname'];
			$user = $_POST['username'];
			$pass = $_POST['password'];
			$email = $_POST['email'];
			$signup=$_POST['Signup'];

			if ($signup=='Signup') {
				# code...
				if (!empty($user) && !empty($pass) && !empty($email)) {
					# code...
					$sql= "INSERT INTO `tutors`(`tutorId`, `tutorName`, `tutorUserName`,`tutorPass`,`tutorEmail`) VALUES ('','$name','$user','$pass','$email')";
					$result = mysqli_query($con,$sql);
					$sql1= "INSERT INTO `tutorlogin`(`tutorName`, `tutorPass`) VALUES ('$user','$pass')";
					$result1 = mysqli_query($con,$sql1);
					header('location: loginpage.html');						
				}
				else{
					echo "All fields are required.";
				}
			}
			else{
					//header('location: index.php');
					echo "Ye kaam nhi kr rha";
			}
		}
?>