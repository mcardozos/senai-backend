<?php

$contas = array(
    array('mes' => 'Janeiro', 'consumo' => '250'),
    array('mes' => 'Fevereiro', 'consumo' => '180'),
    array('mes' => 'Março', 'consumo' => '380'),
    array('mes' => 'Abril', 'consumo' => '520'),
    array('mes' => 'Maio', 'consumo' => '346'),
);

$total_consumo = 0;
$mes_consumo = '';
$meses = 0;
$maior_consumo = 0;

foreach ($contas as $conta) {

    $consumo = $conta['consumo'];
    $mes = $conta['mes'];

    $total_consumo +=  $consumo;
    $meses += 1;

    if($consumo > $maior_consumo){
        $mes_consumo = $mes;
        $maior_consumo = $consumo;
    }

}

$media = $total_consumo / $meses;

echo 'O mês de maior consumo foi o ' . $mes_consumo . ' com ' . $maior_consumo . ' kwh';
echo 'A média de consumo é de ' . $media . 'KWH';
