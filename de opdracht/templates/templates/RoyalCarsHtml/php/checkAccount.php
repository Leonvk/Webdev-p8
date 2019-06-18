<?php
function checkAcc() {
  if (session_status() == PHP_SESSION_DISABLED) {
    echo "Login";
  }
  else
  {
    if($_SESSION["user"] != "") {
    // header("Location: index.php");
    echo "Account";
  }
  else
  {
    echo "Login";
  }
}
}

?>
