<?php
require '../conexao.php';
require 'Item.php';

$id = $_GET['id'];

$delet = new Item($conn);
$delet->deletar($id);
