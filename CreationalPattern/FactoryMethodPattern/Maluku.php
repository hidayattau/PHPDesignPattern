<?php

class Maluku implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Ambon";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}