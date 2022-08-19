<?php

namespace core\controladores;

use core\classes\Functions;

class Main
{
    //======================================================
    public function index()
    {

        $dados = [
            'titulo' => 'Este é um título',
            'clientes' => ['Flavia', 'Luna', 'Nicolas']
        ];

        Functions::Layout([
            'layouts/html_header',
            'pagina_inicial',
            'layouts/html_footer',
        ], $dados);
    }
    //=========================================================
    public function loja()
    {
        echo 'Loja!!!!';
    }
}
