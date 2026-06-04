<?php
session_start();
unset($_SESSION['is_logout_in']);
header("Location: index.html");
exit;
?>