<?php

class NusaTenggaraBarat implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Mataram";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}