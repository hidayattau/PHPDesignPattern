<?php

class Papua implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Jayapura";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}