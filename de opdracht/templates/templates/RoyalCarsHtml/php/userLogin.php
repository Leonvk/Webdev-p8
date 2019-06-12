<?php
function login() {
  $mysqli = new mysqli("localhost", "root", "", "coralyachts");

  $query = $mysqli->prepare("SELECT * FROM customers WHERE email = '".$_POST["mailText"]."' AND  customerID = '".$_POST["idText"]."' ");
  $query->execute();
  $query->store_result();

  $rows = $query->num_rows;

  if($rows == 0)
  {
    echo 'Login failed';
  }
  else
  {
    echo 'Login successful';
  }
}
?>
