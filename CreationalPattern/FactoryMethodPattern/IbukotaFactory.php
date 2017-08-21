<?php

class IbukotaFactory extends Ibukota
{
    private $provinsi;
    
    public function factoryMethod(Provinsi $provinsi)
    {
        $this->provinsi = $provinsi;
        
        return $this->provinsi->getIbukota();
    }
}