<?php 
//connection
include('connection.php');
session_start();
if (isset($_POST['updateprofile'])) {
$username=$_POST['username'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$profession=$_POST['profession'];
$district=$_POST['district'];
$locality=$_POST['locality'];
$pin=$_POST['pin'];
$tempID=$_SESSION['id'];
$SuccMessage="Account Updated";

$sql="UPDATE `users` SET `firstName`='$firstname',`lastName`='$lastname',`age`='$age',`username`='$username',`profession`='$profession',`district`='$district',`locality`='$locality',`phone`='$phone',`pin`='$pin' WHERE userID = '$tempID' ";

if ($conn->query($sql)) {
    echo "<script type='text/javascript'>alert('$SuccMessage');</script>";
	echo "<script>location='../edit-profile.php'</script>";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}


?>