<?php 
include('connection.php');
session_start();
if (isset($_POST['add-about'])) {
    $tempID = $_SESSION['id'];
    $aboutme=$_POST['aboutme'];
    $aboutyou=$_POST['aboutyou'];
    $SuccMessage="Details Added";

    $sql="INSERT INTO `aboutuser`( `userID`, `aboutme`, `aboutyou`) VALUES ('$tempID','$aboutme','$aboutyou')";
    if ($conn->query($sql)) {
        echo "<script type='text/javascript'>alert('$SuccMessage');</script>";
        echo "<script>location='../aboutme.php'</script>";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


if (isset($_POST['update-about'])) {
    $tempID = $_SESSION['id'];
    $aboutme=$_POST['aboutme'];
    $aboutyou=$_POST['aboutyou'];
    $SuccMessage="Details Updated";

    $sql="UPDATE `aboutuser` SET `aboutme`='$aboutme',`aboutyou`='$aboutyou' WHERE userID ='$tempID'";
    if ($conn->query($sql)) {
        echo "<script type='text/javascript'>alert('$SuccMessage');</script>";
        echo "<script>location='../aboutme.php'</script>";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>