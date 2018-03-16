
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0"/>
  

    
    <title>Welcome</title>
	<link rel="stylesheet" href="storystyle.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    
    <style type="text/css">
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
        <li><a class="active" href="story.php">Home</a></li>
        <li><a href="login.php">WriteStory</a></li>
        <li><a href="viewstory.php">ViewStory</a></li>
        <li><a href="about.html">About</a></li>
         <li><a href="login.php" align="right">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

    <div class="page-header">
        <h1>Hi, <b><?php echo $_SESSION['username']; ?></b>. Welcome to our site.</h1>
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
echo "Connected successfully";
}

$sql="SELECT * FROM myguests";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
if($row['id']==50){
echo "<br>";
echo $row['id'] . "<br>";
echo "Name : " . $row['name'] . "<br>";
echo "Email : " . $row['email'] . "<br>";
echo "Title of story : " . $row['storytitle'] . "<br>";
echo "Story : " . $row['story'] . "<br>";
echo "Date : " . $row['reg_date'];
echo "<hr>";

  }
  }
  ?>
  
</body>
</html>




