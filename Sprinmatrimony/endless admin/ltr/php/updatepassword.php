<?php 
include('connection.php');
session_start();
if (isset($_POST['updatepass'])) {
$passupdate=$_POST['passupdate'];
$tempID=$_SESSION['id'];
$SuccMessage="Password Changed";

$sql ="UPDATE `user` SET `password`='$passupdate' WHERE userID ='$tempID'";
if ($conn->query($sql)) {
    echo "<script type='text/javascript'>alert('$SuccMessage');</script>";
	echo "<script>location='../edit-profile.php'</script>";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>