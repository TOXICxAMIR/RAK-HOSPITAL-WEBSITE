<?php 

require('cons.php');
//require('doctorvalidate.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
	$speciality = $_POST['speciality'];
	$email = $_POST['email'];
	$phone_number = $_POST['phone_number'];
	$profile = $_POST['profile'];
	

  $sql= "UPDATE `doctors` SET `fullname` = '$fullname', `speciality` = '$speciality', `email` = '$email', `phone_number` = '$phone_number', `profile` = '$profile' WHERE `doctors`.`id` = '$id' ";
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