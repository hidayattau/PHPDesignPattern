<?php

class DKIJakarta implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Jakarta";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}