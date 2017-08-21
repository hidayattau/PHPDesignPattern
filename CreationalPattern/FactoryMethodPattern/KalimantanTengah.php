<?php

class KalimantanTengah implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Palangkaraya";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}