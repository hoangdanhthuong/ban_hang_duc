<?php
session_start();
unset($_SESSION['admin_sport_shop']);
header('location:../../index.php');

?>