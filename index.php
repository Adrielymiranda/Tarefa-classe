<?php

include("produto.php");
include("venda.php");
include("venda2.php");
include("venda3.php");

$venda= new Venda();
$venda->gerarP();
$venda->CalcularV();

$venda2= new VendaAlimento();
$venda2->gerarP();
$venda2->CalcularV();

$venda3= new VendaMoveis();
$venda3->gerarP();
$venda3->CalcularV();


echo "</br>";
echo $venda->imprimir();
echo "</br>";
echo $venda2->imprimir();
echo "</br>";
echo $venda3->imprimir();
?>