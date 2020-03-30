<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  var y = document.forms["myForm"]["email"].value;
  var z = document.forms["myForm"]["pass"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  if (y == "") {
    alert("Email must be filled out");
    return false;
  }
  if (z == "") {
    alert("Password must be filled out");
    return false;
  }
}
</script>
</head>
<body>

<form name="myForm" action="" onsubmit="return validateForm()" method="post">
  Name: <input type="text" name="name"><br>
  Email: <input type="text" name="email"><br>
  Password: <input type="Password" name="pass"><br>
  
  <input type="submit" value="Submit"><br>

<p>Already have an account? <a href="login.php">Sign in</a>.</p>
</form>

</body>
</html>