<?php

class SumatraUtara implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Medan";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}