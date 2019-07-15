<?php
    require_once 'connect.php';
    session_start();

    $sql3 = "SELECT * FROM `tutors`";
  $query3 = mysqli_query($con,$sql3);

   if(isset($_SESSION['username']))
    {
        $user = $_SESSION['username'];
    }
    
  
      
  
      //$sql = "SELECT * FROM `videos` WHERE `class`='$class' AND `subject`='$subject'";
      $sql = "SELECT * FROM `videos`";
      $result =mysqli_query($con,$sql); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Higher Secondry class</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="videoListStyle.css">
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
                    <a href="subjects.php?class=10">Class 10</a>>
                </div>
              </div> 
            </li>
          <li><a href="studentDashboard.php"><?php echo $user; ?></a> </li>
          <li> <button><a href="disconnect.php">Logout</a></button></li>
        </ul>  
      </nav>

      
    </div>
  </header>

<div style="height: 40px;">
  
</div>
<div class="container">    
  <div class="row">
        <?php
          while ($value = mysqli_fetch_assoc($result)) {
                            # code...
              $id = $value['videoId'];
              $path = "uploads/".$value['class']."/".$value['subject']."/".$value['link'];
              echo "<div class='col-sm-4'>";
              echo"<div class='panel panel-primary'>";
              echo "<div class='panel-heading'>".$value['class']."/".$value['subject']." </div>";
              echo "<div class='panel-body'><video src='".$path."' class='img-responsive' style = 'width= 100%;' ></video></div>";
              echo "<div class='panel-footer'><a href='studentPlay.php?id=$id'>".$value['videoName']."</a></div>"; 
              echo "</div>"; 
              echo "</div>";        
          } 
        ?>
  </div>  
</div><br><br>

<footer class="container-fluid text-center">
    <P> © 2018 Ginger Webs Pvt. Ltd, All rights reserved | Powered by onlineexam.com </P>
</footer>

</body>
</html>
