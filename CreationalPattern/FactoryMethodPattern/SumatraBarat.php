<?php

class SumatraBarat implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Padang";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}