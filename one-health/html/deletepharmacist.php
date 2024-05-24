<?php 

require('cons.php');

if(isset($_POST['delete'])){
    $id = $_POST['id'];
   
	
$sql = "DELETE FROM pharmacist WHERE id = $id";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo "<script>alert('Pharmacist Account Deleted Succesfully')</script>";
	echo "<script>window.open('adminpanel.php','_self')</script>";
}else{
    
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
             <!-- <img src="ap.jpg "> --> <h1><b>DELETE PHARMACIST</b></h1>

		 </div>
		 
		 </div>
	</div>
		<div class="card-body">
			<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"></th> 
      <th scope="col">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      delete_pharmacist();  
     ?>
  </tbody>
</table>
			
		</div>
	</div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>