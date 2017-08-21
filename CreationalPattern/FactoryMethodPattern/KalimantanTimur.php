<?php

class KalimantanTimur implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Samarinda";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}