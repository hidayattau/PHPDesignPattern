<?php

class Bengkulu implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Bengkulu";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}