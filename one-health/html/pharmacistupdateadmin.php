<?php 

require('cons.php');
//require('doctorvalidate.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
	$phone_number = $_POST['phone_number'];
	$email = $_POST['email'];
	

  $sql= "UPDATE `pharmacist` SET `fullname` = '$fullname', `phone_number` = '$phone_number', `email` = '$email' WHERE `pharmacist`.`id` = '$id' ";
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