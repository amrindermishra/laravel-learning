<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action='/fome-submit' method = "POST">@csrf
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" placeholder= "Enter Your Name"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=" "><br>
  <label for="email">Email :</label><br>
  <input type="text" id = "email" name = "email" placeholder= "Enter Your Email"><br>
  <label for="pwd">Password :</label><br>
  <input type="text" id = "pwd" name = "pwd" placeholder= "Enter Your Password"><br><br>
  <label for="file">Image :</label><br>
  <input type="file" id = "file" name = "file" placeholder= "Select from Device"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html> 