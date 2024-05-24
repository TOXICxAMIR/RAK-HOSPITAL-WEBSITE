<?php 

require('cons.php');
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
    $fullname = $_POST['fullname'];
	$speciality = $_POST['speciality'];
	$email = $_POST['email'];
	$phone_number = $_POST['phone_number'];
	$profile = $_POST['profile'];
	$password = $_POST['password'];
	// $target = "images/".basename($_FILES['image']['name']);
	// $image = $_FILES['image']['name']; 

    // move_uploaded_file($_FILES['image']['tmp_name'], $target);

$sql = "INSERT INTO doctors  VALUES('$id', '$fullname', '$speciality', '$email', '$phone_number', '$profile', '$password')";
$result = mysqli_query($conn, $sql);
 /*if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
 	echo "image uploaded";
 }else{
 	echo "failed to upload image";
 }*/
if ($result) {
	echo "<script>alert('New Doctor Registed Succesfully')</script>";
	echo "<script>window.open('doctorpanel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}
}else{
	echo "fields required";
}


?>