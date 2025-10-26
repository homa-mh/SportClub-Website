<?php
require_once "../app/session_config.php";

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}