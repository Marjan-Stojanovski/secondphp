<?php

define("DB", "shop");
define("DB_USER", "homestead");
define("DB_PASS", "secret");
define("DB_HOST", "localhost");
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die('Connection error');
?>