<?php
include('connection.php');
session_start();
if (isset($_POST['pay'])) {
    $amt=$_POST['amt'];
    $tempID = $_SESSION['id'];
    $date = date("Y-m-d");
    $pckID=2;
    $invstatus=1;
    // echo "<script type='text/javascript'>alert('$amt');</script>";
    if($amt==1000){
        $sql="UPDATE `invoice` SET `PckID`='$pckID',`InvoiceDate`='$date',`InvoiceStatus`='$invstatus' WHERE userID = '$tempID'";
        // echo "<script type='text/javascript'>alert('$date');</script>";
        if ($conn->query($sql)) {
            echo "<script type='text/javascript'>alert('Subscripton Upgraded');</script>";
            echo "<script>location='../user-profile.php'</script>";
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }else{
        echo "<script type='text/javascript'>alert('Minimum Payment is 1000');</script>";
        echo "<script>location='../payment-redirect.php'</script>";
    }
    
}
?>