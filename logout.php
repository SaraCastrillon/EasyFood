<?php
session_start();
session_destroy();
session_unset();
//echo "wii";
 header('Location: index.php');


?>