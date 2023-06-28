<?php

session_start();
$auth = (isset($_SESSION['user_id']) && isset($_SESSION['user_name']));

if(!$auth)
{
    header("Location: ../login.php");
}

include "database.php";


?>