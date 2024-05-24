<?php
require('cons.php');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO admin VALUES('$username',md5('$password'))";     // md5 is to encrypt the password
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('New IT Admin Registered Successfuly')</script>";
        echo "<script>window.open('adminpanel.php','_self')</script>";
    } else {
        echo "<script>alert('Sorry an error occured')</script>";
    }
} else {
    echo "fields required";
}
?>
