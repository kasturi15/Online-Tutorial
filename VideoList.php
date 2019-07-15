<?php
    require_once 'connect.php';

    $sql3 = "SELECT * FROM `tutors`";
  $query3 = mysqli_query($con,$sql3);
    
    if(isset($_GET['sub']))
    {
      $subclass = $_GET['sub'];
      $sub = $subclass;
      $subCode=$sub%10;
      $cl=(int)($sub/10);
      $class = "Class ".$cl;
      if ($subCode==0) {$subject = "English Literature";}
      if ($subCode==1) {$subject = "English Language";}
      if ($subCode==2) {$subject = "Hindi";}
      if ($subCode==3) {$subject = "Maths";}
      if ($cl==1||$cl==2||$cl==3||$cl==4||$cl==5)
      {
          if ($subCode==4) {$subject = "Science";}
          if ($subCode==5) {$subject = "Social Studies";}
      }
      else
      {
          if ($subCode==4) {$subject = "Physics";}
          if ($subCode==5) {$subject = "Chemistry";}
          if ($subCode==6) {$subject = "Biology";}
          if ($subCode==7) {$subject = "History";}
          if ($subCode==8) {$subject = "Civics";}
          if ($subCode==9) {$subject = "Geography";}
      }
      
  
      $sql = "SELECT * FROM `videos` WHERE `class`='$class' AND `subject`='$subject'";
      $result =mysqli_query($con,$sql); 
    }
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
              echo "<div class='panel-footer'><a href='videoPlay.php?id=$id'>".$value['videoName']."</a></div>"; 
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
