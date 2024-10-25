<?php
session_start();
echo $_SESSION['userName'].",you successfully logout!"."<br>"."<a href='login.php'>click here</a>to LogIn again";
session_destroy();
?>