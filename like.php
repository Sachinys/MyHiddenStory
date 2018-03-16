
<?php


echo "hi";
    function like($like,$id){
	
	$like=$like+1;
		
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "mydb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} echo "connected";

	 $sql = "UPDATE myguests
 SET like = $like 
 WHERE id =  $id";

   $retval = mysqli_query( $conn,$sql);
   
   if(! $retval ) {
   echo "not updated";
      die('Could not update data: ' . mysqli_error());
   }
   echo "Updated data successfully\n";


	echo $like;
	
	}

?><form method="post">
    <input type="submit" name="test" id="test" value="RUN" /><br/>
</form>

<?php

function testfun()
{
   echo "Your test function on button  mjk click is working";
}

if(array_key_exists('test',$_POST)){
   testfun();
}

?>
