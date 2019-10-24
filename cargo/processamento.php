<?php

include_once 'Cargo.php';

$cargo = new Cargo();

switch ($_GET['acao']){
    case 'salvar':
        if(empty($_POST['id_cargo'])){
            $cargo->inserir($_POST);
        } else {
            $cargo->alterar($_POST);
        }
        break;
    case 'deletar':
        $cargo->deletar($_GET['id_cargo']);
        break;
}

header('location: index.php');