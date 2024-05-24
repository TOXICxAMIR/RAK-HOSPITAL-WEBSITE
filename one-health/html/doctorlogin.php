<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<!-- <body style="background:url('rak.jpg.jpeg'); background-size:cover; opacity: 2 ; "> -->
<body style="background-color:#77c1f6;">
<div class="container" style="width: 400px; margin-top:130px";>
<center>
<h1><b>Doctor Login Page</b></h1>
</center>
	<div class="card">
	    <img src="dd.jpg.jpeg" class="card-img-top" width="auto" height="auto">
		<div class="card-body" style="background-color:#D9E3EA ;">

	<form class="form-group" action="doctorvalidate.php" method="post">
		<label>Username</label>
		<input type="text" name="username" class="form-control" placeholder="Enter your Username" required=""><br>
		<label>Password</label>
		<input type="password" name="password" class="form-control" placeholder="Enter your password" required=""><br>
		<center>
		<input type="submit" name="loginsubmit"  class="btn btn-primary" value="Login">	
		</center>
		
	</form>
</div>
</div>
</div>
 <footer id="footer" class="midnight-blue">
        <div class="container" style="width: 500px; margin-top: 150px  ">
            <div class="row">
                <div class="col-sm-12">
                    <center> Medical Appointment System. &copy; <?= date('Y'); ?> .All Rights Reserved.</center>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>