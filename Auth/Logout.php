<?php

session_start();
session_destroy();

header("Location: ../Auth/Login.php");
?>