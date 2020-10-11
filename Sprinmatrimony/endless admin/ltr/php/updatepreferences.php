<?php
include('connection.php');
session_start();

if (isset($_POST['add-preferences'])) {
    $tempID = $_SESSION['id'];
$age = $_POST['age'];
$education = $_POST['education'];
$profession = $_POST['profession'];
$district = $_POST['district'];
$gender = $_POST['gender'];
$SuccMessage= "Preference Added Successfully";

$sql="INSERT INTO `matchingcredentials`(`userID`, `age`,`gender`, `district`, `education`, `profession`) VALUES ('$tempID','$age','$gender','$district','$education','$profession')";

if ($conn->query($sql)) {
    echo "<script type='text/javascript'>alert('$SuccMessage');</script>";
	echo "<script>location='../preferences.php'</script>";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

if (isset($_POST['update-references'])) {
    $tempID = $_SESSION['id'];
$age = $_POST['age'];
$education = $_POST['education'];
$profession = $_POST['profession'];
$district = $_POST['district'];
$gender = $_POST['gender'];
$SuccMessage= "Preference Added Successfully";

$sql="UPDATE `matchingcredentials` SET `age`='$age',`gender`='$gender',`district`='$district',`education`='$education',`profession`='$profession' WHERE userID ='$tempID'";

if ($conn->query($sql)) {
    echo "<script type='text/javascript'>alert('$SuccMessage');</script>";
	echo "<script>location='../preferences.php'</script>";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
// echo "<script type='text/javascript'>alert('Test Success');</script>";
?>