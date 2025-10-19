<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location: https://geniusaipro.online/");
exit();
?>