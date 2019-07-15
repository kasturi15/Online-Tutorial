<?php
  require_once 'connect.php';

   $sql3 = "SELECT * FROM `tutors`";
    $query3 = mysqli_query($con,$sql3);
  if(isset($_GET['id']))
  {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `videos` WHERE `videoId` = '$id'";
    $query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($query))
    {
      $Vname = $row['videoName'];
      $class = $row['class'];
      $subject = $row['subject'];
      $link = $row['link'];
      $tid = $row['tutorId'];
    } 
    $path = "uploads/".$class."/".$subject."/".$link;

    $sql2 = "SELECT * FROM `tutors` WHERE `tutorId` = '$tid'";
    $query2 = mysqli_query($con,$sql2);
    $value = $query2->fetch_assoc();
    $tname = $value['tutorName'];

    $sql1 = "SELECT * FROM `videos` WHERE `subject` = '$subject' ";
    $query1 = mysqli_query($con,$sql1);

  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ONLINE EXAM | WELCOME</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script-->
	<link rel="stylesheet" type="text/css" href="watchStyle.css">
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
          <li><a href="teacherDashboard.php"><?php echo $tname; ?></a> </li>
          <li> <button><a href="disconnect.php">Logout</a></button></li>
        </ul>

      </nav>
    </div>
  </header>


	<div class="headingtitle">
  		<h1><?php echo $class."/".$subject ; ?></h1>
	</div>

	<div class="row">
  		<div class="col-2 menu">
    		<ul>
            <?php
              while($row1 = mysqli_fetch_assoc($query1))
              {
                  $id1 = $row1['videoId'];
                  $name1 = $row1['videoName'];
                  $class1 = $row['class'];
                  $subject1 = $row['subject'];
                  $link1 = $row['link'];
                  $path1 = "uploads/".$class1."/".$subject1."/".$link1; 

                  echo "<li><a href='watchdemo.php?id=$id1'>$name1</a></li>";
              }
            ?>
    		</ul>
  		</div>

  		<div class="col-7">
    		<h1><?php echo $Vname; ?></h1>
    		<video width="400" controls>
      			<?php echo "<source src='".$path."' type='video/mp4'>" ?>
      			<source src="class_9\history\FrenchRevolution.ogg" type="video/ogg">
      			Your browser does not support HTML5 video.
    		</video>
        <hr>
        
        <div id="disqus_thread"></div>
<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://onlinetutorials-3.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                            
        
  		</div>

  		<div class="col-2 menu">
    		<div class="card">
  				<img src="img\kasturi.jpg" alt="John" style="width:100%">
				<h1>Kasturi Sharma</h1>
				<p class="tutortitle">CEO & Founder, Example</p>
				<p>Online Tutorials</p>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<p><button class="butcontact">Contact</button></p>
			</div>
  		</div>
	</div>
</body>
</html>