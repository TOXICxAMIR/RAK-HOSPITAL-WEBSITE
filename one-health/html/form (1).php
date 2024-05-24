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
  </body>
    <div class="container">
      <h1 class="form-title">REGISTRATION FORM FOR DOCTOR</h1>
      <form action="doctorreg.php" method="post" class="form">
        <div class="main-user-info">

          <div class="user-input-box">
            <label for="id">id</label>
            <input
              type="text"
              id="id"
              name="id"
              placeholder="Enter DOCTOR ID"
            />
          </div>

          <div class="user-input-box">
            <label for="fullname">fullname</label>
            <input
              type="text"
              id="fullname"
              name="fullname"
              placeholder="Enter Doctor name"
            />
          </div>

          <div class="user-input-box">
            <label for="speciality">speciality</label>
            <input
              type="text"
              id="speciality"
              name="speciality"
              placeholder="Enter speciality"
            />
          </div>

          <div class="user-input-box">
            <label for="email">email</label>
            <input
              type="text"
              id="email"
              name="email"
              placeholder="Enter email"
            />
          </div>

          <div class="user-input-box">
            <label for="phone_number">phone_number</label>
            <input
              type="text"
              id="phone_number"
              name="phone_number"
              placeholder="Enter phone_number"
            />
          </div>

          <div class="user-input-box">
            <label for="profile">profile</label>
            <input
              type="text"
              id="profile"
              name="profile"
              placeholder="Enter profile"
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
