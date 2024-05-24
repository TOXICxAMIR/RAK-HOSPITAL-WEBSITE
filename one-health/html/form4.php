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
    <div class="container">
      <h1 class="form-title">REGISTRATION FORM FOR IT ADMIN</h1>
      <form action="reg_itadmin.php" method="post" class="form">
        <div class="main-user-info">

          <div class="user-input-box">
            <label for="username">username</label>
            <input
              type="text"
              id="username"
              name="username"
              placeholder="Enter ADMIN Name"
            />
          </div>

          <div class="user-input-box">
            <label for="password">password</label>
            <input
              type="text"
              id="password"
              name="password"
              placeholder="Enter password"
            />
          </div>
        </div>

        <div class="form-submit-btn">
            <input type="submit" value="Register" class="btn" name="submit" onclick="validate()">
        </div>
      </form>
    </div>
  </body>
</html>
