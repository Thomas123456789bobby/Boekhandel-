<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#FF5733">
    <link rel="stylesheet" href="/css/Style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/Chatbox.css">
    <title>Boekhandel</title>
</head>
<body>
<?php
session_start();
$boek = array();
if (isset($_COOKIE['shopingcard'])) {
    echo "Cookies are enabled.";
} else {
    setcookie('shopingcard', json_encode($boek));
}
?>
<div>
