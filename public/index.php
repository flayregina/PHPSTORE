<?php

// abrie a sessao

use core\classes\Database;
use core\classes\Functions;

session_start();

// carregar o config
require_once('../config.php');

// carrega todas as classes do projeto
require_once('../vendor/autoload.php');

$a = new Database();
$b = new Functions();

$b->teste();

echo 'ok';

/*
carregar o config
carregar classes 
carregar o sistema de rotas
    -mostrar loja
    -mostrar carrinho
    -mostrar o backoffice, etc 
*/