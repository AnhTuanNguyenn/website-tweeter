<?php
include("library/config.php");
session_destroy();
$db->redirect(DIR."login.php");
?>