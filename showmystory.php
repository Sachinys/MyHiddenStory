<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en"><head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="storystyle.css">
  <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
		img{width: 250px; height: 250px;}
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
        <li><a href="writestory.php">WriteStory</a></li>
        <li><a href="viewstory.php">ViewStory</a></li>
        <li><a href="about.html">About</a></li>
        <li><a class="active" href="showmystory.php" >MyStories</a></li>
      </ul>
    </div>
  </div>
</nav>

    <div class="page-header">
	<?php echo "<br>"; ?>
        <h1>Hi, <b><?php echo $_SESSION['username']; ?></b>. Your stories.</h1>
    </div>
    <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>



<div class="container-fluid bg-3 text-center"> 
<div class="row">

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "mydb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
include_once("functions.php");

$username = $_SESSION['username'];
 $sql = "SELECT *FROM myguests WHERE username='$username' ";
		   $result = mysqli_query($conn, $sql);
		   
		   
while($row = mysqli_fetch_array($result)){

                 ?>
  <div class="col-sm-4">
    <div class="thumbnail">
	<div class="thumbnail_img">
      <?php echo "<img src= 'uploads/" . $row['image'] . "'class='img-responsive-margin' style='width:80%' style='height:100%' alt='No Image'>";?>
 </div>     
	  <p><strong><?php echo  $row['storytitle'] . "<br>";?></strong></p>
      
   <?php
                    		
		$content = $row["story"];
		// your page id to display full content
		$page_id = $row["id"];
		// your page file to display full content
		$link = "myselectedstory.php";
		// limit content character
		$limit = 100;
		?>
		<?php echo readmeMore($content,$link,"id",$page_id, $limit, $limit); 
		?> 
		<strong><?php echo "By " . $row['name'] . "<br>";?>
 </strong></div>
  </div>
  <?php  }
  ?>
</div></div>

	<footer align="center" >
	<?php echo "&copy; ". date("Y")." ".$_SERVER['HTTP_HOST'] ;?>
	</footer>





</body></html>