<!DOCTYPE html>
<html lang="en"><head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="storystyle.css">
  
<style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
		.person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
}
.person:hover {
    border-color: #f1f1f1;
}
footer{background: black;color:white;}

    </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script language="javascript" type="text/javascript" src="savestory.js"></script>


    
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="story.php">Home</a></li>
        <li><a href="login.php">WriteStory</a></li>
        <li><a href="viewstory.php">ViewStory</a></li>
        <li><a class="active" href="about.php">About</a></li>
         <li><a href="login.php" align="right">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container text-center">
  <h3>THE BAND</h3>
  <p><em>Hello!</em></p>
  <!--  <p>I have created this website so the world will not forgget our untold stories</p>  -->
  <br>

<div class="rows">
  <div class="col-sm-4">
    <p class="text-center"><strong>Sachin Yadav</strong></p><br>
    <a href="#demo" data-toggle="collapse">
      <img src="uploads/about1.jpg" class="img-circle person" alt="Random Name">
    </a>
    <div id="demo" class="collapse">
      <p>B.Tech (II-year)</p>
      <p>IIT Roorkee</p>
    </div>
  </div>
  <div class="col-sm-4">
  <br><br><br>
	<b><em> </em></b><br>
	<b><em>Exitement must lead to immediate action or you will lose the power of momentum. More dreams die because we fail to seize the moment. Do it now!</em></b><br><br>
	<p>People only remember the story of winner but looser also has a memorable untold story. </p>
  </div>
  
</div>  
</div>

    <footer align="center">
	<?php echo "&copy; ". date("Y")." ".$_SERVER['HTTP_HOST'] ;?>
	</footer>
</body>
</html>