<?php

namespace core\controladores;

use core\classes\Database;
use core\classes\Store;

class Main
{
    //======================================================
    public function index()
    {

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'inicio',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }
    //=========================================================
    public function loja()

    {
        //Apresenta a página da loja

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'loja',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }

    //=============================================================
    public function novo_cliente()
    {
        // verifica se ja existe sessão aberta
        if (store::clienteLogado()) {
            $this->index();
            return;
        }

        // apresenta o layout para criar um novo utilizador
        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'criar_cliente',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }

    //=============================================================
    public function criar_cliente()
    {

        // verifica se já existe sessão
        if (Store::clienteLogado()) {
            $this->index();
            return;
        }

        // verifica se houve submissão de um formulario
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            $this->index();
            return;
        }

        // verifica se senha 1 = senha 2
        if ($_POST['text_senha_1'] !== $_POST['text_senha_2']) {

            // as password são diferentes
            $_SESSION['erro'] = 'As senhas não estão iguais.';
            $this->novo_cliente();
            return;
        }

        // verifica na base de dados se existe cliente com o mesmo email
        $bd = new Database();
        $parametros = [
            ':e' => strtolower(trim($_POST['text_email']))
        ];
        $resultados = $bd->select("SELECT email FROM clientes WHERE email = :e", $parametros);

        // se o cliente ja existe...
        if (count($resultados) != 0) {
            $_SESSION['erro'] = 'Já existe um cliente com o mesmo email.';
            $this->novo_cliente();
            return;
        }


        /*

        3. registro
        
           criar um purl
           guardar os dados na tabela cliente
           enviar um email com o purl para o cliente
           apresentar uma mensagem indicando que deve validar o seu email

         */
    }

    //=============================================================
    public function carrinho()

    {
        //Apresenta a página do carrinho

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'carrinho',
            'layouts/footer',
            'layouts/html_footer',
        ]);
    }
}
