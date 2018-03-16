<!DOCTYPE html>
<html lang="en"><head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="storystyle.css">
  
    <style >
        
        		
		  p {font-size: 16px;}
  .margin {margin-bottom:35px;}
		  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
    .bg-4 { 
      background-color: #ffffff; /* Black Gray */
      color: #000;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
.img-responsive-margin{
      width: 300px;
	  height: 300px;
}
.pagination{
      width:100%;
	  height:20px;
      align:center;
	  background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
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
        <li><a href="story.php">Home</a></li>
        <li><a href="login.php">WriteStory</a></li>
        <li><a class="active" href="viewstory.php">ViewStory</a></li>
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
}
include_once("functions.php");
?>


<div class="container-fluid bg-4 text-center"> 
<div class="row">
<?php
$results_per_page = 5;

	 /* Get total number of records */
         $sql = "SELECT * FROM myguests ";
         $result = mysqli_query( $conn, $sql);
         $number_of_results = mysqli_num_rows($result);
		 
		 $number_of_pages = ceil($number_of_results/$results_per_page);
		 
         if( !isset($_GET['page'] ) ) {
            $page = 1;
         }else {
            $page = $_GET['page'];
			}
           
		   $this_page_first_result = ($page-1)*$results_per_page;
         ?>
		 
<?php
	      $sql = "SELECT *FROM myguests LIMIT " . $this_page_first_result . ',' . $results_per_page;
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
		$link = "selectedstory.php";
		// limit content character
		$limit = 100;
		?>
		<?php echo readMore($content,$link,"id",$page_id, $limit, $limit); 
		?> 
		<strong><?php echo "<br>"."By " . $row['name'] . "<br>";?>
 </strong></div>
  </div>
  <?php }
		   

  ?>
   
</div>

<div class="pagination" ><?php
         for($page=1;$page<=$number_of_pages;$page++){
		 echo '<a href="viewstory.php?page=' . $page .' "> ' . $page . '</a>'; 
		 }
       echo "<br>" . "<br>"; 
      ?>
</div>
<?php?></div>

<footer align="center" >
	<?php echo "&copy; ". date("Y")." ".$_SERVER['HTTP_HOST'] ;?>
</footer>



</body>
</html>