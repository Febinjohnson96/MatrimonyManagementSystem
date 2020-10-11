<?php 
//connection
include('connection.php');
if (isset($_POST['submit'])) {
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $roleid=2;
    $age=$_POST['age'];
    $education=$_POST['education'];
    $profession=$_POST['profession'];
    $phone=$_POST['phone'];
    $district=$_POST['district'];
    $area=$_POST['locality'];
    $pin=$_POST['pin'];
    $SuccMessage="Account Created Please Login";
    $date = date("Y-m-d");
    //find max
	$qurry_auto_id = "SELECT MAX(userID)FROM  users";
    $result_auto_id = mysqli_query($conn, $qurry_auto_id);
    $row_auto_id = mysqli_fetch_array($result_auto_id);
    $Current_id =  $row_auto_id['MAX(userID)']+1;

$sql = "INSERT INTO `users`(`userID`,`roleID`, `firstName`, `lastName`, `age`, `username`, `password`,`gender`, `education`, `profession`, `district`, `locality`, `phone`, `pin`) VALUES ('$Current_id','$roleid','$firstname','$lastname','$age','$username','$password','$gender','$education','$profession','$district','$area','$phone','$pin')";

if ($conn->query($sql)) {
    $sql_inv = "INSERT INTO `invoice`( `userID`, `PckID`, `InvoiceDate`, `InvoiceStatus`) VALUES ('$Current_id',1,'$date',1)";
    if ($conn->query($sql_inv)) {
        echo "<script type='text/javascript'>alert('$SuccMessage');</script>";
	echo "<script>location='../login.html'</script>";
    }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>