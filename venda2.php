<?php

class VendaAlimento {

    public $produto;
    public $valor;
    private $numProd=0;

    public function Imprimir(){
        echo " Venda no valor:" .$this->valor ."</br>";
            for($i=0; $i<$this->numProd;$i++){
                echo "Produto:" . $this->produto[$i]->nome . 
              "- Valor un:" . $this->produto[$i]->valor .
              "- Qtd:" . $this->produto[$i]->qtd .
              "- Valor total:" . $this->produto[$i]->valorT . "</br>";

            }
    }

    public function calcularV(){
        $this->valor=0;
        for ($i=0; $i<$this->numProd; $i++){
            $this->valor += $this->produto[$i]->valorT;
        }
    }

    public function gerarP(){
        $p1= new Produto();
        $p1->id =1;
        $p1->qtd =2;
        $p1->nome = "café";
        $p1->valor=10;
        $p1->calcular ();
        $this->numProd++;

        $p2= new Produto();
        $p2->id =2;
        $p2->qtd =2;
        $p2->nome = "Arroz";
        $p2->valor=29;
        $p2->calcular ();
        $this->numProd++;

        $this->produto[0] = $p1;
        $this->produto[1] = $p2;
       
        
    

    }
}

?>