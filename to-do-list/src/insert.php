<?php
require '../conexao.php';
require 'Item.php';
$afazer = $_POST["afazer"];
$id = $_POST['id'];


$adc = new Item($conn);
$adc->adicionar($afazer);
