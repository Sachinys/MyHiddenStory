<?php
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
  
    <style type="text/css">
        body{ font: 14px sans-serif; }
		  p {font-size: 16px;}
  .margin {margin-bottom:35px;}
 
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
    .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }

	img{width: 300px; height: 300px; }
.flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
	margin-top:50px;
}
footer{ margin-bottom:0%;background: black;color:white;}
	
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
        <li><a class="active" href="viewstory.php">ViewStory</a></li>
        <li><a href="about.php">About</a></li>
         <li><a href="login.php" align="right">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="flex-container">
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
?>

<?php



if(isset($_GET['id'])){
		$sql = "SELECT * FROM myguests WHERE id =".$_GET['id'];
		$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
		while( $rows = mysqli_fetch_assoc($resultset) ) {
					global $likes, $id;
                         $likes = $rows['likes'];
                         $id = $rows['id'];  	?>
<div class="container-fluid bg-4 text-center"> 
<div class="row">
    <div class="col-sm-4">
			            <?php echo "<img src= 'uploads/" . $rows['image'] . "' alt='No Image'>";?>
	</div>
	<div class= "col-sm-4">	
                     	<?php echo "<br>" .$rows['name'] . "<br>";
						echo $rows['reg_date']."<br>";
						$like=$rows['likes']+1;
						echo $like . "Likes" ."<br>";?>
	</div>
	</div>
	</div>
		<div class="container-fluid bg-2 text-center">
  <h3 class="margin">  <?php echo $rows['storytitle'] ;?> </h3>  
			
			           <?php echo "<br>" . "<br>";?>
					 <p>  <?php echo $rows['story'];?></p>
		</div>
		<?php	
		}
	}
	?>
   <form method="post">
    <input type="submit" name="test" id="test" value="LIKE" /><br/>
	
</form>

<?php

function testfun($likes,$id)
{
   $likes=$likes+1;
  
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


   	 $sql = "UPDATE myguests
 SET likes = '$likes '
 WHERE id ='$id'";

   $retval = mysqli_query( $conn,$sql);
   
   if(!$retval ) {
      die('Could not update data: ' . mysqli_error());
   }
   echo $likes."likes\n";
	
	}
 
if(array_key_exists('test',$_POST)){
   testfun($likes,$id);
}


?>
	
	
    <footer>
	<?php echo "&copy; ". date("Y")." ".$_SERVER['HTTP_HOST'] ;?>
	</footer>
</div>
	</body>
</html>




