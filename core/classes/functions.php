<?php

namespace core\classes;

class Functions
{
    //=================================================
    public static function Layout($estruturas, $dados = null)
    {
        // verifica se estruturas é um array
        if (!is_array($estruturas)) {
            throw new Exception("Coleção de estruturas inválidas");
        }

        // variáveis
        if (!empty($dados) && is_array($dados)) {
            extract($dados);
        }

        // apresentar as views da aplicação
        foreach ($estruturas as $estruturas) {
            include("../core/views/$estruturas.php");
        }
    }
}
/*
html_header.php
nav_bar.php
inicio.php
html_footer.php
*/