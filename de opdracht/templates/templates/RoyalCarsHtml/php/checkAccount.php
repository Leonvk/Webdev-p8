<?php
function checkAcc() {
  if($_SESSION["user"] != "") {
    // header("Location: index.php");
    echo "Account";
  }
  else
  {
    echo "Login";
  }
}

?>
