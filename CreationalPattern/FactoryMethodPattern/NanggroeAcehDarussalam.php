<?php

class NanggroeAcehDarussalam implements Provinsi
{
    private $ibukota = "Banda Aceh";
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}