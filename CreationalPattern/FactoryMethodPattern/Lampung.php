<?php

class Lampung implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Bandar Lampung";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}