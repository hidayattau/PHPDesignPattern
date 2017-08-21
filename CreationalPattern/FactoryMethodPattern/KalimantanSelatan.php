<?php

class KalimantanSelatan implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Banjarmasin";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}