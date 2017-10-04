<?php
// Database Constants - should match those on your development machine
define("DB_SERVER", "127.0.0.1");
define("DB_USER", "root");
define("DB_PASSWORD", "mypassword");
define("DB_NAME", "sims");
$db = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
?>
