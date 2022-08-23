<?php

$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'rekamedik',
    'host' => 'localhost'
);

$con = $sql_details;
if(!$con) {
     die('Koneksi Error: ' . mysqli_connect_error());
}