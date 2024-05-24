<?php 

require('cons.php');
//require('doctorvalidate.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $rak_no = $_POST['rak_no'];
    $fullname = $_POST['fullname'];
	$phone_number = $_POST['phone_number'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	

  $sql= "UPDATE `patient` SET `rak_no` = '$rak_no', `fullname` = '$fullname', `phone_number` = '$phone_number', `email` = '$email', `address` = '$address', `gender` = '$gender' WHERE `patient`.`id` = '$id' ";
 $result = mysqli_query($conn,$sql);

if ($result) {
	echo "<script>alert('Details Updated Succesfully')</script>";
	echo "<script>window.open('adminpanel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}
}else{
	echo "fields required";
}


?>