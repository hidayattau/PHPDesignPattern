<?php

class SulawesiUtara implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Manado";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}