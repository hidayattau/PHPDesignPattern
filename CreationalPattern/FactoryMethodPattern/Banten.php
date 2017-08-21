<?php

class Banten implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Serang";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}