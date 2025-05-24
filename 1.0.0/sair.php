<?php
session_start();
$_SESSION.clearstatcache();
session_destroy();
header("Location: index.php");
?>