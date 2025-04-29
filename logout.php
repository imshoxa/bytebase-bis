<?php
session_start();
session_unset();
session_destroy();

// Редиректим на главную страницу платформы для гостей
header("Location: mainpage.php");
exit();
?>
