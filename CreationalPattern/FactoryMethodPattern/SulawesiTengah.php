<?php

class SulawesiTengah implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Palu";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}