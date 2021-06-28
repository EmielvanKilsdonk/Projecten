<?php

  echo '<script>alert("U bent uitgelogd, u keert nu terug naar de hoofdpagina.")</script>';
  session_start();
  session_destroy();
  header("location: index.php");

?>