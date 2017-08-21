<?php

class SulawesiSelatan implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Makassar";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}