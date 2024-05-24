<?php

require('cons.php');

if (isset($_POST['delete'])) {
    $id = $_POST['id'];


    $sql = "DELETE FROM drug WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Drug Deleted Succesfully')</script>";
        echo "<script>window.open('pharmacisthomepage.php','_self')</script>";
    } else {

        echo "<script>alert('Sorry an error occurs')</script>";
        //echo "<script>window.open('adminpanel.php','_self')</script>";
        //ader("Location:adminpanel.php");

    }
}

?>

<!DOCTYPE html>
<<?php include('doc_details_process.php') ?>
    <html>

    <head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>

    <!-- <body style="background:url('rak.jpg.jpeg'); background-size:cover; opacity: 2 ; "> -->
    <body style="background-color:#77c1f6;">
    <div class="container" style="width: 1500px; margin-top:200px";>
	<div class="card">
       <!<img src="images/admin.jpeg" class="card-img-top" width="50px" height="150px">
       
		<div class="card-body" style="background-color: #AB1D29 ; color: white; border-color: #06F2F8;">
         <div class="row">
         <div class="col-md-2">
         </div>
		<div class="col-md-7">
             <!-- <img src="images/med.jpg "> --> <h1><b>DELETE DRUGS</b></h1>

		 </div>
		 
		 </div>
	</div>
		<div class="card-body">
			<table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">NAME</th>
                                            <th scope="col">BARCODE</th>
                                            <th scope="col">INSURED</th>
                                            <th scope="col">STATUS</th>
                                            <th scope="col">PRICE</th>
                                            <th scope="col">QUANTITY</th>
                                            <th scope="col">REG_BY</th>
                                            <th scope="col">DATE</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        delete_drug();
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>




                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
                        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
                        crossorigin="anonymous"></script>
    </body>

    </html>