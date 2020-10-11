<?php 
//connection
include('connection.php');
session_start();
$_SESSION['loged'] = "false";
if(isset($_POST['submit'])) {
    $myusername = mysqli_real_escape_string($conn,$_POST['username']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 

    $sql = "SELECT * FROM users WHERE username = '$myusername' AND password = '$mypassword'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);
    $roleID = $row ['roleID'];
    if($count == 1) {
        $_SESSION['logged']=true;
        $_SESSION ['username']=$row['firstName'];
        $_SESSION['id'] = $row['userID']; 
        $tempId = $_SESSION['id'];
        $dtime = date("Y-m-d H:i:s");
        $sql_log="INSERT INTO `login`(`userID`, `time`) VALUES ('$tempId','$dtime')";
        if ($conn->query($sql_log)){
            if ($roleID == 2) {
                echo "<script>location='verification.php'</script>";
             }else { echo "<script>location='../index.php'</script>";
           }
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    //     if ($roleID == 2) {
    //      echo "<script>location='verification.php'</script>";
    //   }else { echo "<script>location='../index.php'</script>";
    // }
}else {
    echo "<script type='text/javascript'>alert('Your Login Name or Password is invalid')</script>";
	echo "<script>location='../login.html'</script>";
   
}
}
?>