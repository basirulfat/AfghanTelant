<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/login.css" />
    <title>login</title>
  </head>
  <body>
    <div class="container">
      <form id="form" class="form" autocomplete="off">
        <h2>Register with us</h2>
        <div class="form-control">
          <label for="email">Email</label>
          <input type="text" id="email" placeholder="Enter email" />
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="password">Password</label>
          <input type="password" id="password" placeholder="Enter password" />
          <small>Error message</small>
        </div>
        <button type="submit">Login</button>
      </form>
    </div>

    <script src="./assets/js/module/login.js"></script>
  </body>
</html>
