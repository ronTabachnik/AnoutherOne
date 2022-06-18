<?
session_start();

session_destroy();
setcookie('PHPSESSID', '', 0);

header("Location: /index.php");
exit();
