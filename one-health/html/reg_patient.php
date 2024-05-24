<?php
require('cons.php');
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $rak_no = $_POST['rak_no'];
    $fullname = $_POST['fullname'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];

    $sql = "INSERT INTO patient VALUES('$id','$rak_no','$fullname', '$phone_number','$email', '$address', '$gender', md5('$password'))";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('New patient Registered Successfuly')</script>";
        echo "<script>window.open('patientpanel.php','_self')</script>";
    } else {
        echo "<script>alert('Sorry an error occured')</script>";
    }
} else {
    echo "fields required";
}
?>
