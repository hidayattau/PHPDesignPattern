<?php

class Bali implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Denpasar";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}