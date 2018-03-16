<!DOCTYPE html>
<html lang="en">
<head>
  <title>story</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="storystyle.css">
  
  
  
  <style>
  p {font-size: 16px;}
  .margin {margin-bottom:25px;}
 
  .bg-2 { 
      color: #474e5d; /* Dark Blue */
      background-color: #ffffff;
  }
  .bg-3 { 
      background-color: #f4511e; /* Dark Blue */
      color: #000000;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 40px;
      padding-bottom: 40px;
  }
    .img-responsive-margin{
      width: 300px;
	  height: 300px;
}
  footer{ background: black;color:white;}
  
  </style>
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
        <li><a class="active" href="story.php">Home</a></li>
        <li><a href="login.php">WriteStory</a></li>
        <li><a href="viewstory.php">ViewStory</a></li>
        <li><a href="about.php">AboutUs</a></li>
         <li><a href="login.php" align="right">Login</a></li>
      </ul>
    </div>
  </div>
</nav>


 
<?php
/*
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "mydb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}echo "<br>"."<br>";*/

require_once 'configmydb.php';
include_once("functions.php");
?>
 
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="story5.png" alt="My">
      <div class="carousel-caption">
        <h3>My</h3>
        <p>Some of the Most Beautiful Stories always remain UNTOLD</p>
      </div> 
    </div>

    <div class="item">
      <img src="story8.jpg" alt="Untold">
      <div class="carousel-caption">
        <h3>Untold</h3>
        <p>There is no greater agony than bearing an untold story inside you</p>
      </div> 
    </div>

    <div class="item">
      <img src="story10.jpg" alt="Story">
      <div class="carousel-caption">
        <h3>Story</h3>
        <p>Everyone has three lives A Public Life, A Private Life, A Secret Life</p>
      </div> 
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 <!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">MyUntoldStory</h3>
  <p>We all have some untold stories. Let the world know these untold stories. If you do not want to disclose your identity it's ok you can share your story with any name you want. For this what you have to do is just login. Only you can see your personal information and stories writtten by you in past. Other people can see your story with the name what you want to show them. So please write your story.Thank you! </p>
 <!-- <a href="#" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> Search
  </a> -->
</div>

<div class="container-fluid bg-3 text-center">
<h3 class="margin">Top Stories</h3><br>
<div class="rows text-center">
<?php 

$sql = "SELECT *FROM myguests";
		   $result = mysqli_query($conn, $sql);
		   		   
while($row = mysqli_fetch_array($result)){
	if($row['id']==81){

  ?>
  <div class="col-sm-4">
    <div class="thumbnail">
      <?php echo "<img src= 'uploads/" . $row['image'] . "'class='img-responsive-margin' style='width:80%'  alt='No Image'>";?>
      <p><strong><?php echo  $row['storytitle'] . "<br>";?></strong></p>
    
      
   <?php
                    		
		$content = $row["story"];
		// your page id to display full content
		$page_id = $row["id"];
		// your page file to display full content
		$link = "selectedstory.php";
		// limit content character
		$limit = 100;
		?>
		<?php echo readMore($content,$link,"id",$page_id, $limit, $limit); 
		?> 
		<strong><?php echo "By " . $row['name'] . "<br>";?>
 </strong></div>
  </div>
  <?php }
		   }
  ?>
   

<?php
 $sql = "SELECT *FROM myguests ";
		   $result = mysqli_query($conn, $sql);
		   
		   
		   		 while($row = mysqli_fetch_array($result)){
				 if($row['id']==89){
                    
?>
  <div class="col-sm-4">
    <div class="thumbnail">
      <?php echo "<img src= 'uploads/" . $row['image'] . "'class='img-responsive-margin' style='width:80%'  alt='No Image'>";?>
      <p><strong><?php echo  $row['storytitle'] . "<br>";?></strong></p>
     
      
   <?php
                    		
		$content = $row["story"];
		// your page id to display full content
		$page_id = $row["id"];
		// your page file to display full content
		$link = "selectedstory.php";
		// limit content character
		$limit = 100;
		?>
		<?php echo readMore($content,$link,"id",$page_id, $limit, $limit); 
		?> 
		<strong><?php echo "By " . $row['name'] . "<br>";?>
 </strong></div>
  </div>
  <?php }
		   }
  ?>
<?php
 $sql = "SELECT *FROM myguests";
		   $result = mysqli_query($conn, $sql);
		   
		   
		   		 while($row = mysqli_fetch_array($result)){
				 if($row['id']==81){
				                     
?>
  <div class="col-sm-4">
    <div class="thumbnail">
      <?php echo "<img src= 'uploads/" . $row['image'] . "'class='img-responsive-margin' style='width:80%'  alt='No Image'>";?>
      <p><strong><?php echo  $row['storytitle'] . "<br>";?></strong></p>
      
   <?php
                    		
		$content = $row["story"];
		// your page id to display full content
		$page_id = $row["id"];
		// your page file to display full content
		$link = "selectedstory.php";
		// limit content character
		$limit = 100;
		?>
		<?php echo readMore($content,$link,"id",$page_id, $limit, $limit); 
		?> 
		<strong><?php echo "By " . $row['name'] . "<br>";?>
 </strong></div>
  </div>
  <?php }
		   }
  ?>
</div>
</div>
				 
				 <!-- Third Container (Grid) -->
<div class="container-fluid bg-4 text-center">    
  <h3 class="margin">Why?</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>Everyone has untold stories of pain and sadness that make them love and live differently than you do. Stop judging! Instead try to understand. </p>
	  <img src="story2.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>"Stories" it should not be perfect, not be untold, not be romedy.. it should be the lesson to teach the human, what the life is?</p>
      <img src="story4.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>To share our srories is not only a worthwhile endeaver for the storyteller, but for those who read our stories and feel lesss alone because of it.</p>
      <img src="story2.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
  </div>
</div>

<div class="container">
  <h3 class="text-center">Contact Us</h3>
  <p class="text-center"><em>We love your feedback!</em></p>
  <div class="row test">
    <div class="col-md-4">
      <p> Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Roorkee, India</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: sachinyadav980@yahoo.com</p> 
    </div>
	<form action="insertfeedback.php" method="post">
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="feedback" name="feedback" placeholder="Comment" rows="5"></textarea>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div>
	</form>
  </div>
</div>


	<footer align="center" >
	<?php echo "&copy; ". date("Y")." ".$_SERVER['HTTP_HOST'] ;?>
	</footer>
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});</script>
</body>
</html>