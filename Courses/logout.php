<?php
session_start();
session_destroy();
header("Location: cours1.php");
exit();
?>
