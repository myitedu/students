<?php
ini_set("display_errors",1);
$parms = $_FILES;

$tmp_name = $parms['myfile']['tmp_name'];

$file_name = basename($parms['myfile']['name']);
$destination = __DIR__ . "/uploads/" . $file_name;

move_uploaded_file($tmp_name, $destination);

header("Location: december16.php");
exit;