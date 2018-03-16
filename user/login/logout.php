<?php
session_name('main');
session_start();
unset($_SESSION);
session_destroy();
header('Location:loginstarts.php');
?>