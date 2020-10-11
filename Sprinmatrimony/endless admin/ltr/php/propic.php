<?php
//connection
 include('connection.php');
 session_start();
 if (isset($_POST['submit'])) {
    $target_dir = "pic/";
    $userPic = $_FILES['picupload']['name'];
    // $temp_name = $_FILES['picupload']['tmp_name'];
    $tempID=$_SESSION['id'];
     $SuccMessage="Profile Picture Updated";
    $sql = "INSERT INTO `userpicture`(`userID`, `propic`) VALUES ('$tempID','$userPic')";
    if ($conn->query($sql)) {
        if(move_uploaded_file($_FILES['picupload']['tmp_name'],"../pic/".$userPic)){
            echo  "<script type='text/javascript'>alert('$SuccMessage');</script>";
            echo "<script>location='../edit-profile.php'</script>";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

 }
}
// update profile pic

if (isset($_POST['update'])) {
    $target_dir = "pic/";
    $userPic = $_FILES['picupload']['name'];
    // $temp_name = $_FILES['picupload']['tmp_name'];
    $tempID=$_SESSION['id'];
     $SuccMessage="Profile Picture Updated";
    // $sql = "INSERT INTO `userpicture`(`userID`, `propic`) VALUES ('$tempID','$userPic')";
    $sql_u = "UPDATE `userpicture` SET `propic`='$userPic' WHERE userID = '$tempID'"; 
    if ($conn->query($sql_u)) {
        if(move_uploaded_file($_FILES['picupload']['tmp_name'],"../pic/".$userPic)){
            echo  "<script type='text/javascript'>alert('$SuccMessage');</script>";
            echo "<script>location='../edit-profile.php'</script>";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

 }
}
?>