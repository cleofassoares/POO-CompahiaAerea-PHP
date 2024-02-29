<?php

require_once 'Classes/Aeronave.php';
require_once 'Classes/Aeroporto.php';
require_once 'Classes/Passageiro.php';
require_once 'Classes/Tripulantes.php';
require_once 'Classes/Voo.php';


$aeronave = new Aeronave('Airbus A320', '240', '1998', 'DISPONIVEL PARA VOO');
$aeronave_02 = new Aeronave('Boeing 777', '550', '1994','VOANDO');

$aeroporto = new Aeroporto('Aeroporto Internacional de Guarulhos', 'São Paulo-Brasil', 'DISPONIVEL');
$aeroporto_02 = new Aeroporto('Aeroporto de Charles de Gaulle', 'Paris-França', 'DISPONIVEL');

$passageiro
?>


<html>
    <head>
        <title>Minha pagina HTML</title>
    </head>
    <BODY>
        <h2>AERONAVES</h2>
        <strong>Modelo:</strong> <?= $aeronave->getModelo() ?> <br>
        <strong>Capacidade Passageiro:</strong> <?= $aeronave->getCapacidadePassageiro() ?> <br>
        <strong>Ano Fabricação:</strong> <?= $aeronave->getAnoFabricacao() ?> <br>
        <strong>Status Aeronave:</strong> <?= $aeronave->getStatusAeronave() ?> <br>
        <br>
        <strong>Modelo:</strong> <?= $aeronave_02->getModelo() ?> <br>
        <strong>Capacidade Passageiro:</strong> <?= $aeronave_02->getCapacidadePassageiro() ?> <br>
        <strong>Ano Fabricação:</strong> <?= $aeronave_02->getAnoFabricacao() ?> <br>
        <strong>Status Aeronave:</strong> <?= $aeronave_02->getStatusAeronave() ?> <br>
        <br>
        <h2>AEROPORTOS</h2>
        <strong>Nome:</strong> <?= $aeroporto->getNome() ?> <br>
        <strong>Endereço:</strong> <?= $aeroporto->getEndereco() ?> <br>
        <strong>Status Pista:</strong> <?= $aeroporto->getStatusPista() ?> <br>
        <br>
        <strong>Nome:</strong> <?= $aeroporto_02->getNome() ?> <br>
        <strong>Endereço:</strong> <?= $aeroporto_02->getEndereco() ?> <br>
        <strong>Status Pista:</strong> <?= $aeroporto_02->getStatusPista() ?> <br>
        
    </BODY>
</html>