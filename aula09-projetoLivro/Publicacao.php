<?php

require_once "Livro.php";
require_once "Pessoa.php";

interface Publicacao{
    public function abrir();
    public function fechar();
    public function folhear();
    public function avancarPag();
    public function voltarPag();
}

?>