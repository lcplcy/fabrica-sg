<?php

// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (isset($_SESSION['email'])) {
header('Location: home.php');
}else {
header('Location: home.php');
}

?>