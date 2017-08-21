<?php

class SumatraSelatan implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Palembang";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}