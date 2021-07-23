<?php
include_once '../model/Conexao.php';
include_once '../model/Manager.php';

$manager = new Manager();

$data = $_POST;

if(isset($data) && !empty($data)){
    $manager->insertCostumer("veiculos", $data);

    header("Location: ../index.php?costumer_add_success");
}