<!DOCTYPE html>
<html>
<head>
  <script>
  function validateForm() {
      var x = document.forms["myForm"]["username"].value;
      if (x == "") {
          alert("Name must be filled out");
          return false;
      }
      var y = document.forms["myForm"]["password"].value;
      if (y == "") {
          alert("Password must be filled out");
          return false;
      }
  }
  </script>
  <title>Signin form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="signin">
    <h1>FOREIGN TRADING SYSTEM</h1>
    <H2>BIG BASKET</H2>
      <form name="myForm" action="loginconnect.php"
      onsubmit="return validateForm()" method="POST">
      <h2>Sign In</h2>
      <input type="text" placeholder="Enter Username" name="username">
      <input type="text" placeholder="Enter Password" name="password">
    <input type="submit" type='hidden' value="LOGIN" class="btn-login"/>
    </form>
  </div>
</body>
</html>
