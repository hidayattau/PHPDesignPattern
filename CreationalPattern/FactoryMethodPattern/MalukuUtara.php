<?php

class MalukuUtara implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Ternate";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}