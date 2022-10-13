<?php
include 'login1.php';
include 'signin.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Login and Registration Form </title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="hot-air-balloon.png" type="image/x-icon">
  <link rel="stylesheet" href="login.css">

</head>

<body>
   <div class="wrapper">
      <div class="title-text">
         <div class="title login" >
            Login Form
         </div>
         <div class="title signup">
            Signup Form
         </div>
      </div>
      <div class="form-container">
         <div class="slide-controls" style="color: black;">
            <input type="radio" name="slide" id="login" checked>
            <input type="radio" name="slide" id="signup">
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">Signup</label>
            <div class="slider-tab"></div>
         </div>
         <div class="form-inner">
            <form action="login.php" class="login" method="post">
               <div class="field">
                  <input type="text" placeholder="Email Address" name="email" required>
               </div>
               <div class="field">
                  <input type="password" placeholder="Password" name="password" required>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" value="Login">
               </div>
               <div class="signup-link">
                  Not a member? <a href="">Signup now</a>
               </div>
            </form>
            <form action="login.php" class="signup" method="post" name="myform" onsubmit="return validateform()">
               <div class="field">
                  <input type="text" placeholder="Email Address" name="email1" required>
               </div>
               <div class="field">
                  <input type="password" placeholder="Password" name="password1" required>
               </div>
               <div class="field">
                  <input type="password" placeholder="Confirm password" name="cpassword" required>
               </div>
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" value="Signup">
               </div>
            </form>
         </div>
      </div>
   </div>
   <script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (() => {
         loginForm.style.marginLeft = "-50%";
         loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (() => {
         loginForm.style.marginLeft = "0%";
         loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (() => {
         signupBtn.click();
         return false;
      });


      function validateform() {
         var password = document.myform.password1.value;
         var cpassword = document.myform.cpassword.value;
         if (password.length < 8) {
            alert("Password must be at least 8 characters long.");
            return false;
         } else if (cpassword != password) {
            alert
               ("Both Password must be same");
         }
      }
   </script>
</body>

</html>