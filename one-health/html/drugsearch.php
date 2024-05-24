<!DOCTYPE html>
<html lang="en">

<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>
<body>
    <section class="vh-100 bg-image"
        style="background-image: url('drugsearch.jpg'); background-repeat: no-repeat; background-size:cover; ">
        <div class="mask d-flex align-items-center h-100 background">
            <div class="container h-100 ">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div>
                                <!-- <center><img src="./images/RAK_Hospital_Logo2-removebg-preview.png" alt="" width="70%"
                                        height="15%"></center>
                            </div> -->
                            <div class="card-body p-5" style="background-color: #00f1f1">
                                <h2 class="text-uppercase text-center mb-5">SEARCH DRUG</h2>
                                <form action="drugsearchprocess.php" method="post">
                                    <div class="form-outline mb-4">
                                        <form class="form-group" action="drugsearchprocess.php" method="post">
                                            <label>Drug Name</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Enter drug name" required=""><br>

                                            <center>
                                                <input type="submit" name="searchdrug" class="btn btn-primary"
                                                    value="Search">
                                            </center>
                                        </form>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>