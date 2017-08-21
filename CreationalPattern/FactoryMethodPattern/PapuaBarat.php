<?php

class PapuaBarat implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Manukwari";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}