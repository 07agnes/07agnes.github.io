
<?php

$db = mysqli_connect("localhost","root","","orixdb");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
} else{


///////-----------------------------------------formfuctions------------------------------------------------------------/////
if(isset($_POST['submit'])){

	$id = 0;
	$email=$_POST['email'];
	$comment=$_POST['comment'];

$save = mysqli_query($db,"INSERT INTO `comments`(`id`, `email`, `comment`) values ($id,$email,$comment)");
header('Location:order.html');
exit();
} 
else{ 
	echo "submittion failed";
	header('Location:order.html');
	exit();
}
}
	
?>