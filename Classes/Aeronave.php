<?php

class Aeronave
{
    private string $modelo;
    private int $capacidadePassageiro;
    private int $anoFabricacao;
    private string $statusAeronave;


    public function __construct($modelo, $capacidadePassageiro, $anoFabricacao, $statusAeronave)
    {
        $this->modelo = $modelo;
        $this->capacidadePassageiro = $capacidadePassageiro;
        $this->anoFabricacao = $anoFabricacao;
        $this->statusAeronave = $statusAeronave;
    } 

    public function getModelo() : string
    {
        return $this->modelo;
    }

    public function getCapacidadePassageiro() : int
    {
        return $this->capacidadePassageiro;
    }

    public function getAnoFabricacao() : int
    {
        return $this->anoFabricacao;
    }

    public function getStatusAeronave() : string
    {
        if ($this->statusAeronave == 'DISPONIVEL PARA VOO'){
            return $this->statusAeronave;
        } elseif ($this->statusAeronave == "EM MANUTENÇÃO") {
            return $this->statusAeronave;
        } elseif ($this->statusAeronave == 'VOANDO') {
            return $this->statusAeronave;
        } else {
            return 'AERONAVE INDISPONIVEL';
        }
    }
}
