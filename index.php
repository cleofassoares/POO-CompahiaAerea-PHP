<?php

require_once 'Classes/Aeronave.php';
require_once 'Classes/Aeroporto.php';
require_once 'Classes/Passageiro.php';
require_once 'Classes/Tripulantes.php';
require_once 'Classes/Voo.php';
require_once 'Classes/Cidade.php';
require_once 'Classes/Checkin.php';
require_once 'Classes/Passagem.php';




$cidade = new Cidade('Araruna', 'Paraná');

$aeronave = new Aeronave('Airbus A320', '240', '1998', 'DISPONIVEL PARA VOO');
$aeronave_02 = new Aeronave('Boeing 777', '550', '1994','VOANDO');

$aeroporto = new Aeroporto('Aeroporto Internacional de Guarulhos', 'São Paulo-Brasil', 'DISPONIVEL', $cidade);
$aeroporto_02 = new Aeroporto('Aeroporto de Charles de Gaulle', 'Paris-França', 'DISPONIVEL', $cidade);

$passageiro = new Passageiro('José Aparecido', 18, "12345678900", "M", '99852156', 32, 'Ab-15', true);
$passageiro_02 = new Passageiro('José Aparecido', 18, "12345678900", "M", '99852156', 32, 'Ab-15', true );

$tripulante = new Tripulantes('Maria Augusta', 'Ativo', 'Comissário', 21, "57676576567", "M");
$tripulante_02 = new Tripulantes('Joao Aparecido', 'Ativo', 'Comissário', 21, "57676576567", "M");

$checkin = new Checkin('José Aparecido','HZ854','FD985621', true);
$checkin_02 = new Checkin('Maria Ynês', 'GC258','GS87962', false); 

$passagem = new Passagem($passageiro, '05-10-2024', '10:00 Am');


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
        <br>
        <h2>VOO</h2>
        <strong>Aeroporto Partida:</strong> <?= $aeroporto_02->getNome() ?> <br>
        <strong>Aeroporto Destino:</strong> <?= $aeroporto_02->getEndereco() ?> <br>
        <strong>Aeronave:</strong> <?= $aeroporto_02->getStatusPista() ?> <br>
        <strong>Passageiro:</strong> <?= $passageiro->getNome() ?> <br>
        <strong>Tripulação:</strong> <?= $tripulante->getNome() ?> <br>
        <strong>Data Hora Partida:</strong>
        <strong>Data hora Chegada:</strong>
        <h2>TRIPULANTES</h2>
        <strong>Nome:</strong> <?= $tripulante->getNome() ?> <br>
        <strong>Cargo:</strong> <?= $tripulante->getCargo() ?> <br>
        <strong>Licença:</strong> <?= $tripulante->getLicenca() ?> <br>
        <h2>PASSAGEIRO</h2>
        <strong>Nome:</strong> <?= $passageiro->getNome() ?> <br>
        <strong>Contato:</strong> <?= $passageiro->getContato() ?> <br>
        <strong>Numero Passagem:</strong> <?= $passageiro->getNumeroPassagem() ?> <br>
        <strong>Passaporte:</strong> <?= $passageiro ->getPassaporte() ?> <br>
        <strong>Checkin:</strong> <?= $passageiro ->getCheckin() ?> <br>
        <h2>CIDADE</h2>
        <strong>Nome:</strong> <?= $cidade -> getNome() ?> <br>
        <strong>Estado</strong> <?= $cidade ->getEstado() ?> <br>
        <h2>PASSAGEM</h2>
        <strong>Nome:</strong> <?= $passagem->getPassageiro()->getNome() ?> <br>
        <strong>Dia:</strong> <?= $passagem -> getDia() ?> <br>
        <strong>Cpf:</strong> <?= $passagem -> getPassageiro() -> getCpf() ?> <br>
        <strong>Hora:</strong> <?= $passagem -> getHora() ?> <br>
    </BODY>
</html>