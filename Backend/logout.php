<?php

require_once 'ConnectDB.php';

$_SESSION =[];
session_unset();
session_destroy();
header("Location: ../index.php");

?>