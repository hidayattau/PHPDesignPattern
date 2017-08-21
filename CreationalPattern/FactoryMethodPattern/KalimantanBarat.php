<?php

class KalimantanBarat implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Pontianak";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}