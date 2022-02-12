<?php
  $a='Durjoy Acharya';
  $b='01876068550';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration From</title>
    <link rel="stylesheet" href="Login.css" />
  </head>
  <body>
    <div class="bg-img">
      <div class="from-box">
        <div class="button-box">
          <div id="btn"></div>
          <button type="button" onclick="login()" class="toggle-btn">
            Log In
          </button>
          <button type="button" onclick="register()" class="toggle-btn">
            Sign up
          </button>
        </div>
        <form id="login" class="input-group">
          <input
            type="text"
            class="input-field"
            placeholder="user id"
            required
          />
          <input
            type="password"
            class="input-field"
            placeholder="password"
            required
          />
          <input type="checkbox" class="check-box" />
          <span>Remenber Password</span>
          <button type="submit" class="submit-btn">Log in</button>
        </form>
        <form id="register" class="input-group">
          <input
            type="text"
            class="input-field"
            placeholder="User Name"
            required
          />
          <input
            type="email"
            class="input-field"
            placeholder="Email"
            required
          />

          <input
            type="password"
            class="input-field"
            placeholder="Password"
            required
          />
          <input type="checkbox" class="check-box" />
          <span>I agree to the terms and conditions</span>
          <button type="submit" class="submit-btn">Register</button>
        </form>
      </div>
      
    </div>
    <script>
      var x = document.getElementById("login");
      var y = document.getElementById("register");
      var z = document.getElementById("btn");
      function register() {
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
      }
      function login() {
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
      }
    </script>
  </body>
</html>
