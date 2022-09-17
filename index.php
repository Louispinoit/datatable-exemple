<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>First exercice</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jqc-1.12.4/dt-1.12.1/datatables.min.css" />
    <link rel="stylesheet" href=".\libs\bootstrap\css\bootstrap.css" />

    <link rel="stylesheet" href="style.css">
</head>


<?php
$route = "";
$route = [
    'home' => 'home',
    '404' => 'nop'
];
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if (isset($route[$page])) {
        require('controller/' . $route[$page] . '_controller.php');
    } else {
        require('controller/' . $route['404'] . '_controller.php');
    }
} else {
    require('controller/' . $route['home'] . '_controller.php');
}
