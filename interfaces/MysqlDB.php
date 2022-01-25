<?php

    class MysqlDB implements Database {
        
        public function listarProduto()
        {
            echo 'Listando Produtos MYSQL!';
        }

        public function adicionarProduto()
        {
            echo 'Adicionando Produto com MYSQL!';
        }

        public function alterarProduto()
        {
            echo 'Alterando Produto com MYSQL';
        }
    }