<?php
//string - all chars in your keyboard
//Int - -12412412412412 to 11212312312312
//Array - [1,2,3,4,5]; - 1
//Boolean - True | False - 1|0
//Object - Class
//Float - 1,3 0.3333 or PI - 3.14324
//Resources - filesystem, database connection, cache
//NULL - Special variable
$first_name = $_POST['first_name']??null;
$first_name = htmlentities($first_name);

$last_name = $_POST['last_name']??null;
$last_name = htmlentities($last_name);

$email = $_POST['email']??null;
$email = htmlentities($email);

$message = $_POST['message']??null;
$message = htmlentities($message);

//Email Validation

if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    header("Location: august23.php?msg=Your+email+is+incorrect&status=fail");
    exit;
}

echo "WOHOOOO";
header("Location: august23.php?msg=Your+request+accepted+successfully&status=success");
exit;