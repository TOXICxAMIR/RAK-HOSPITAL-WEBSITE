<?php 

require('cons.php');
if(isset($_POST['submit'])){
	$id = $_POST['id'];
    $drug_name = $_POST['drug_name'];
	$quantity = $_POST['quantity'];
	$address = $_POST['address'];
	$patient = $_POST['patient'];
	$date = $_POST['date'];
	$status = $_POST['status'];

$sql = "INSERT INTO orders  VALUES($id, '$drug_name', '$quantity', '$address', '$patient', '$date', '$status')";
$result = mysqli_query($conn, $sql);
 /*if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
 	echo "image uploaded";
 }else{
 	echo "failed to upload image";
 }*/
if ($result) {
	echo "<script>alert('New Order Added Succesfully')</script>";
	echo "<script>window.open('patientpanel.php','_self')</script>";
}else{
    
    echo "<script>alert('Sorry an error occurs')</script>";
	//echo "<script>window.open('adminpanel.php','_self')</script>";
}
}else{
	echo "fields required";
}


?>