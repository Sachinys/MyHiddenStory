<?php
// Initialize the session
session_start();
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
  <style>
  body{ font: 14px sans-serif; text-align: center; }
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
        <li><a href="about.php">About</a></li>
         <li><a href="showmystory.php" align="right">MyStory</a></li>
      </ul>
    </div>
  </div>
</nav>

    <div class="page-header">
	<?php echo "<br>"; ?>
        <h1>Hi, <b><?php echo $_SESSION['username']; ?></b>. Your stories.</h1>
    </div>
    <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>

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
}else{
echo "Connected successfully";}

$emp_name = $_POST['name'];
$emp_story = $_POST['writestory'];
$emp_title = $_POST['storytitle'];
$emp_category = $_POST['category'];
$emp_username = $_SESSION['username'];
$emp_image = $_SESSION['image'];
$sql="INSERT INTO myguests (name,storytitle,story,category,username,image,reg_date) 
VALUES('$emp_name','$emp_title','$emp_story','$emp_category','$emp_username','$emp_image',now())";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

<a href="showmystory.php"> view your story</a>

</body>
</html>
