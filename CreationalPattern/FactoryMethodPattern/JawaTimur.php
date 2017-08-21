<?php

class JawaTimur implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Surabaya";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}