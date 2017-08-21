<?php

class Gorontalo implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Gorontalo";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}