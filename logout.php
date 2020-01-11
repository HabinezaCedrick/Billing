<?php

session_start();
include('session.php');
session_destroy();

header("Location:loginn.php"); // Redirecting To Home Page

?>