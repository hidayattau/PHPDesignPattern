<?php

class KepulauanRiau implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Tanjung Pinang";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}