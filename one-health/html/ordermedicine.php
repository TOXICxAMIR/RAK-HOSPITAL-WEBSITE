<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ORDER MEDICINE PAGE</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style3.css" />
  </head>
  <body>
    <div class="container">
      <h1 class="form-title">ORDER MEDICINE</h1>
      <form action="reg_order.php" method="post" class="form">
        <div class="main-user-info">

        <div class="user-input-box">
            <label for="id">id</label>
            <input
              type="text"
              id="id"
              name="id"
              placeholder="Enter id"
            />
          </div>

          <div class="user-input-box">
            <label for="drug_name">drug_name</label>
            <input
              type="text"
              id="drug_name"
              name="drug_name"
              placeholder="Enter drug_name"
            />
          </div>

          <div class="user-input-box">
            <label for="quantity">quantity</label>
            <input
              type="text"
              id="quantity"
              name="quantity"
              placeholder="Enter quantity"
            />
          </div>

          <div class="user-input-box">
            <label for="address">address</label>
            <input
              type="text"
              id="address"
              name="address"
              placeholder="Enter address"
            />
          </div>

          <div class="user-input-box">
            <label for="patient">patient</label>
            <input
              type="text"
              id="patient"
              name="patient"
              placeholder="Enter patient"
            />
          </div>

          <div class="user-input-box">
            <label for="date">date</label>
            <input
              type="text"
              id="date"
              name="date"
              placeholder="Enter date"
            />
          </div>

          <div class="user-input-box">
            <label for="status">status</label>
            <input
              type="text"
              id="status"
              name="status"
              placeholder="Enter status"
            />
          </div>
        </div>

        <div class="form-submit-btn">
            <input type="submit" value="submit" class="btn" name="submit" onclick="validate()">
        </div>
      </form>
    </div>
  </body>
</html>