<?php

class Voo
{
    private string $aeroportoPartida;
    private string $aeroportoDestino;
    private string $aeronave;
    private string $passageiro;
    private string $checkin;
    private string $tripulacao;
    private string $dataHoraPartida;
    private string $dataHoraChegada;
   
   
   
   
    public function __construct ($aeroportoPartida, $aeroportoDestino, $aeronave, $passageiro, $checkin, $tripulacao, $dataHoraPartida, $dataHoraChegada)
    {
       $this->aeroportoPartida = $aeroportoPartida;
       $this->aeroportoDestino = $aeroportoDestino;
       $this->aeronave = $aeronave;
       $this->passageiro = $passageiro;
       $this->checkin = $checkin;
       $this->tripulacao = $tripulacao;
       $this->dataHoraPartida = $dataHoraPartida;
       $this->dataHoraChegada = $dataHoraChegada;
    
    }

    public function getAeroportoPartida (): string
    {
        return $this->aeroportoPartida;
    }
    
       
    public function getAeroportoDestino (): string
    {
        return $this->aeroportoDestino;
    }

        
    public function getAeronave(): string
    {
        return $this->aeronave;
    }
    
        
    public function getPassageiro (): string 
    {
        return $this->passageiro;
    }
       
    
    public function getCheckin (): string
    {
        return $this->checkin;
    }


    public function getTripulacao(): string
    {
        return $this->tripulacao;
    }


    public function getDataHoraPartida(): string
    {
        return $this->dataHoraPartida;
    }


    public function getDataHoraChegada(): string
    {
        return $this->dataHoraChegada;
    }
            
        
}
