<?php

class SulawesiTenggara implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Kendari";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}