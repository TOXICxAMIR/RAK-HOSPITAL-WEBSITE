<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REGISTRATION FORM</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style3.css" />
  </head>

<body>
    <section class="order-form m-4">
        <div class="container pt-4">
            <div class="row">
                <div class="col-12 px-4">
                    <!-- <img src="./images/RAK_Hospital_Logo2-removebg-preview.png" alt="" width="70%" height="70%"> -->
                    <br> <br>
                    <h1>ORDER DRUG</h1>
                    <hr class="mt-1" />
                </div>
                <form action="reg_order.php" method="post">
                    <div class="col-12">

                        <div class="row mx-4">
                            <br> 
                            <div class="col-12">
                                <label class="order-form-label">ID:</label>
                                <input type="text" name="id" id="" placeholder="Enter id">
                            </div>
                            <br> <br>
                            <div class="col-12">
                                <label class="order-form-label">Drug Name:</label>
                                <input type="text" name="drug_name" id="" placeholder="Enter drug name">
                            </div>
                            <br> <br>
                            <div class="col-12">
                                <label class="order-form-label">Quantity:</label>
                                <input type="number" name="quantity" id="" placeholder="Enter quantity">
                            </div>
                            <br> <br>
                            <div class="col-12">
                                <label class="order-form-label">Address:</label>
                                <input type="text" name="address" id="" placeholder="Enter address">
                            </div>
                            <br> <br>
                            <div class="col-12">
                                <label class="order-form-label">Patient:</label>
                                <input type="text" name="patient" id="" placeholder="Enter patient name">
                            </div>
                            <br> <br>
                            <div class="col-12">
                                <label class="order-form-label">Date:</label>
                                <input type="date" name="date" id="" placeholder="Enter date">
                            </div>
                            <br> <br>
                            <div class="col-12">
                                <label class="order-form-label">Status:</label>
                                <input type="text" name="status" id="" placeholder="Enter status">
                            </div>
                            <br> <br>
                        </div>
                        <br>
                        <div class="b">
                            <input type="submit" value="Submit" class="btn btn-primary btn-lg" name="submit"
                                onclick="validate()">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
</body>

</html>