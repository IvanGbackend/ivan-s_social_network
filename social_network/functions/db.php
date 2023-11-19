<?php

//$con = mysqli_connect(hostname:'localhost', username:'root', password:'', database:'social_network');
$con = mysqli_connect('localhost', 'root', '', 'social_network');

function escape($string) {
    global $con;
    return mysqli_real_escape_string($con, $string);
}

function query($query) {
    global $con;
    return mysqli_query($con, $query);
}

function confirm($result) {
    global $con;
    if(!$result) {
        die("Query Failed" . mysqli_error($con));
    }
}