<?php
  session_start();

  if (!$_SESSION['valid']) {
  	header("Location: login.php");
  }
?>