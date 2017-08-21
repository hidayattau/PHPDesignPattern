<?php

class DaerahIstimewaYogyakarta implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Yogyakarta";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}