<?php 
include('connection.php');
session_start();
$clientID = $_SESSION['id'];
//find max
$qurry_auto_id = "SELECT MAX(InvoiceID)FROM  invoice_package_details where userID  = '$clientID'";
$result_auto_id = mysqli_query($conn, $qurry_auto_id);
$row_auto_id = mysqli_fetch_array($result_auto_id);
$Current_id =  $row_auto_id['MAX(InvoiceID)'];
//echo $Current_id;
$sql_package = "SELECT * FROM `invoice_package_details` where InvoiceID  = '$Current_id' ";
					$result_package = mysqli_query($conn, $sql_package);
					$row_package= mysqli_fetch_array($result_package);
                    $limit = $row_package['PckValidity'];
                    
                    $date=$row_package['InvoiceDate'];
                    //$dateadd=date_create($row_package['PckValidity']);
                   $a=date('Y-m-d', strtotime($date.  + $limit."days"));
                   $datetest = date_create( $a);
                   // echo $datetest;
                   if((date("Y-m-d")) > (date_format($datetest,"Y-m-d"))){
                    echo "<script type='text/javascript'>alert('Package Expired Redirecting to payment page');</script>";
                    echo "<script>location='../payment-redirect.php'</script>";
                   }else {
                    echo "<script>location='../user-profile.php'</script>";
                   }                    

?>