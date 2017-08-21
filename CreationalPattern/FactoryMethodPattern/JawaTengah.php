<?php

class JawaTengah implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Semarang";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}