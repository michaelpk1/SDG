<?php
session_start();
session_destroy();
header("location: public_html/index.php");

?>