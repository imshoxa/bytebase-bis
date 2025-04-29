<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("Location: register.php");
    exit();
}

include("events.php");
session_start();
include("connect.php");
include("mainpage.php");
include("events.php");


