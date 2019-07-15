<?php
		require_once 'connect.php';
		session_start();

		/*if (isset($_SESSION['Id'])) {
			# code...
			header('location: index.php');
		}*/

		if ($_POST) {
			# code...
			$user = $_POST['username'];
			$pass = $_POST['password'];
			$signin=$_POST['sign'];

			if ($signin=='sign') {
				# code...
				if (!empty($user)) {
					# code...
					if (!empty($pass)) {
						# code...
						$result = $con->query("SELECT * FROM `login` WHERE `Id` = '$user' AND `password` = '$pass'");

						if ($result->num_rows == 1) {
							# code...
							$value = $result->fetch_assoc();
							$id = $value['Id'];							
							$_SESSION['Id'] =$id;
							header('location: studentDashboard.php');						
						}
						else{

							$result = $con->query("SELECT * FROM `tutorlogin` WHERE `tutorName` = '$user' AND `tutorPass` = '$pass'");

							if ($result->num_rows == 1) {
							# code...
								$value = $result->fetch_assoc();
								$id = $value['tutorName'];							
								$_SESSION['tutorName'] =$id;
								header('location: teacherDashboard.php');						
							}
							else{
								echo "username and password did not match.";
							}
						}
					}
					else{
						echo "password is required.";
					}
				}
				else{
					echo "Username is required.";
				}
			}
			else{
					//header('location: index.php');
					echo "Ye kaam nhi kr rha";
			}
		}
?>