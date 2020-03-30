<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
  var y = document.forms["myForm"]["email"].value;
  var z = document.forms["myForm"]["pass"].value;
 
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
  
  Email: <input type="text" name="email"><br>
  Password: <input type="Password" name="pass"><br>
  
  <input type="submit" value="Submit"><br>


</form>

</body>
</html>