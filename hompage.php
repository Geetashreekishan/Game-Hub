<?php
session_start();
include("connect.php");

// Redirect to index.html after successful connection
header("Location: http://localhost/gamehub/index.html");
exit();  // Ensures no further code is executed after the redirect

?>


