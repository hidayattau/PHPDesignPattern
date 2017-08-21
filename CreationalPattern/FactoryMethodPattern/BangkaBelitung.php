<?php

class BangkaBelitung implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Pangkal Pinang";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}