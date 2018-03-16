<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="storystyle.css">
      
    <style >
       
		.tr1{margin-left: 5%; }
		.tr2{margin-left: 5%; }
		.tr3{ margin-left:10%;margin-right:10%;}
		.text_writestory{margin-left:10%;width:90%;height:400px;}
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
        <li><a href="story.php">Home</a></li>
        <li><a class="active" href="writestroy.php">WriteStory</a></li>
        <li><a href="viewstory.php">ViewStory</a></li>
        <li><a href="about.html">About</a></li>
         <li><a href="showmystory.php" align="right">MyStories</a></li>
      </ul>
    </div>
  </div>
</nav>


  <div class="page-header">
       <?php echo "<br>"; ?>
        <h1 align="center">Hi, <b><?php echo $_SESSION['username']; ?></b>. Write your story.</h1>
    </div>
    <p align="center"><a href="logout.php" class="btn btn-danger" >Sign Out of Your Account</a></p>





<div class="container">
  <h3 class="text-center">Tell your story</h3>
  <p class="text-center"><em>Upload any image that suit your story. Write name which you want to show others.</em></p>
  <p class="text-center">Make sure that you first upload the image and then write story</p>
  <div class="row test">
    <div class="col-md-12">
     <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Upload Image" name="submit" align="left" >
     </form>
	</div>
  </div>
    <?php echo "<br>";?>
	<form action="insert.php" method="post">
     <div class="row">
        <div class="col-sm-4 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
		<div class="col-sm-4 form-group">
          <input class="form-control" id="Title" name="storytitle" placeholder="Title" type="text" required>
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="category" name="category" placeholder="Category" type="text" required>
        </div>
      </div>
      <textarea class="form-control" id="Your Story" name="writestory" placeholder="Story" rows="15" required="requieed"></textarea>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Save</button>
        </div>
     </div>
	</form>
</div>




<footer align="center" >
	<?php echo "&copy; ". date("Y")." ".$_SERVER['HTTP_HOST'] ;?>
</footer>

</body>
</html>