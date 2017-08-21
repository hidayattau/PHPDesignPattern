<?php

class NusaTenggaraTimur implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Kupang";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}