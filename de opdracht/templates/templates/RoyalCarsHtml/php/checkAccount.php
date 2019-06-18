<?php
function checkAcc() {
  if (session_status() === PHP_SESSION_NONE) {
    echo "Login";
    $_SESSION["user"] = "";
  }
  elseif($_SESSION["user"] != "") {
    echo "Account";
  }
  else
  {
    echo "Login";
  }
}

?>
