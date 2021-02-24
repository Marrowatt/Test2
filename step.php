<?php

    require_once('functions.php');

    $functions = new Functions();

    $return = null;

    if($_POST['function'] == 0) {

        $return = $functions->incluir($_POST);
    }

    if($_POST['function'] == 1) {

        $return = $functions->incluirFilho($_POST);
    }

    if($_POST['function'] == 2) {

        $return = $functions->remover($_POST);
    }

    if($_POST['function'] == 3) {

        $return = $functions->removerFilho($_POST);
    }

    if($_POST['function'] == 4) {

        $return = $functions->ler();
    }

    if($_POST['function'] == 5) {
        
        $return = $functions->gravar($_POST);
    }

    echo $return;