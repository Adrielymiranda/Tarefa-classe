<?php

class Produto {

    public $id;
    public $nome;
    public $valor;
    public $qtd;
    public $valorT;

    public function calcular(){
        $this->valorT= $this->valor * $this->qtd;
    }
}

?>
