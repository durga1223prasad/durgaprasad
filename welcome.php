<?php
session_start();
echo"<p align='right'><a href='logout.php'>Logout</a></p>";
echo"WELCOME".$_SESSION['userName'];
?>