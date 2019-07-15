<!DOCTYPE html>
<html lang="en">
<head>
  <title>Secondry class</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     
    header ul{
  margin: 0;
  padding: 0;
}

.button_1{
  height: 38px;
  background:#e8491d;
  border: 0;
  padding-left: 20px;
  padding-right: 20px;
  color: #ffffff;
}


/* Header */

header{
  background: #35424a;
  color: #ffffff;
  padding-top: 10px;
  min-height: 30px;
  text-shadow: #a8491d 3px solid;
}

header a{
  color: #ffffff;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 16px; 
}

header li{
  float: left;
  display: inline;
  padding: 0 20px 0 20px;
}

header #branding{
  float: left;
}

header #branding h1{
  margin: 0;
}

header nav{
  float: right; 
  margin-top: 70px;
}

header .highlight, header .current a{
  color: #e8491d;
  font-weight: bold;
}

header a:hover{
  color:#e8491d;
  font-weight: bold;
}

   
    /* Add a gray background color and some padding to the footer */
    footer{
  padding: 20px;
  margin-top: 20px;
  color: #ffffff;
  background-color: #e8491d;
  text-align: center;
}

  </style>
</head>
<body>

<header>
   
    <div class="container">
      <div id="branding">
        <h1><span class="highlight">ONLINE</span> TUTORIALS </h1> 
      </div>
      <nav>
        <ul>
          <li class="current"><a href="index.html"> HOME </a></li>
          <li><a href="index.html"> TUTORS </a> </li>
          <li><a href="index.html"> COURSES </a> </li>
         
          
         <li><a href="#" style="float: right;"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

        </ul>

        
      </nav>

    
    </div>
  
</header>

<div style="height: 40px;">
  
</div>
<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">CLASS SIX</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Sixth standard tutorials are here</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">CLASS SEVEN</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Seventh standard tutorials are here</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">CLASS EIGHT</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Eight standard tutorials are here</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">CLASS NINE</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Ninth standard tutorials are here </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">CLASS TEN</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Tenth standard tutorials are here</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">HIGHER SECONDRY</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">For higher secondry tutorials click here</div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
    <P> © 2018 Ginger Webs Pvt. Ltd, All rights reserved | Powered by onlineexam.com </P>
    
  <form class="form-inline">Get details:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>
