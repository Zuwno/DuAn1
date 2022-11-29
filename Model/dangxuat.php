<?php
session_start();
session_destroy();
header("Location: ../View/dangnhap2.php");
?>