<?php
session_start();

$erros = [];


if (isset($_GET['id'])) {

    $data = file_get_contents('pro.json');

    $Products = json_decode($Products, true);

}


