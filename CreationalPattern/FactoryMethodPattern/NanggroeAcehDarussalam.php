<?php

class NanggroeAcehDarussalam implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Banda Aceh";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}