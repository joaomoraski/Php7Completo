<?php
session_start();
session_destroy();
unset($_COOKIE['usuarios']);
setcookie($_COOKIE['usuarios'], '');
header('Location: login.php');