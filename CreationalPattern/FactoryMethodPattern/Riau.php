<?php

class Riau implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Pekanbaru";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}