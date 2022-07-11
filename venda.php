<?php

class Venda {

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
        $p1->nome = "coca-cola";
        $p1->valor=18;
        $p1->calcular ();
        $this->numProd++;

        $p2= new Produto();
        $p2->id =2;
        $p2->qtd =2;
        $p2->nome = "Lapis";
        $p2->valor=3;
        $p2->calcular ();
        $this->numProd++;

        $p3= new Produto();
        $p3->id =3;
        $p3->qtd =4;
        $p3->nome = "caderno";
        $p3->valor=20;
        $p3->calcular ();
        $this->numProd++;

        $p4= new Produto();
        $p4->id =4;
        $p4->qtd =5;
        $p4->nome = "Salgado";
        $p4->valor=2;
        $p4->calcular ();
        $this->numProd++;

        $this->produto[0] = $p1;
        $this->produto[1] = $p2;
        $this->produto[2] = $p3;
        $this->produto[3] = $p4;
        
    

    }
}

?>