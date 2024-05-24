<?php
require('cons.php');
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO pharmacist VALUES('$id','$fullname','$phone_number','$email', md5('$password'))";     // md5 is to encrypt the password
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('New Pharmacist Registered Successfuly')</script>";
        echo "<script>window.open('pharmacistpanel.php','_self')</script>";
    } else {
        echo "<script>alert('Sorry an error occured')</script>";
    }
} else {
    echo "fields required";
}
?>
