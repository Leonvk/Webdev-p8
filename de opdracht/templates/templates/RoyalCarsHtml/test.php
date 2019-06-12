<head>
  <?php
  foreach(glob("php/*.php") as $filename)
  {
    include $filename;
  }
  ?>
</head>
<html>
<?php
  connection()
?>

<form id="loginForm" method="post">
  <label id="label1">Username:</label>
  <input type="email" placeholder="Enter Email" name="mailText" required>
  <br>
  <label id="label2">Password:</label>
  <input type="password" placeholder="Enter ID" name="idText" required>
  <br>
  <input type="submit" value="click" name="login">
</form>
<?php
if(isset($_POST['login']))
{
 login();
}
?>
</html>
