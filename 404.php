<?php

$error = $_SERVER["REDIRECT_STATUS"];

$error_title = '';
$error_message = '';

if($error == 404) {
    $error_title = '404 page not found';
    $error_message = 'The document /file requested is not found on this server.';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div align='center'>
    <h1><?php echo  $error_title; ?></h1>
    <h5><?php echo  $error_message; ?></h5>
    </div>
</body>
</html>