<?php
session_start();
unset($_SESSION["uid"]);
echo "<script>location.href='index.php';</script>";