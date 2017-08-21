<?php

class SulawesiBarat implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Mamuju";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}