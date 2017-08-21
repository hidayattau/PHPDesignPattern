<?php

class JawaBarat implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Bandung";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}