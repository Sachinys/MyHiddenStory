
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
        <li><a href="login.php">WriteStory</a></li>
        <li><a href="viewstory.php">ViewStory</a></li>
        <li><a href="about.php">About</a></li>
         <li><a href="login.php" align="right">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

 
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
$emp_email = $_POST['email'];
$emp_feedback = $_POST['feedback'];

$sql="INSERT INTO feedback (name,email,feedback,date) 
VALUES('$emp_name','$emp_email','$emp_feedback',now())";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
<a href="story.php">Home Page </a>

</body>
</html>
