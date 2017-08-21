<?php

class KalimantanUtara implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Tanjung Selor";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}