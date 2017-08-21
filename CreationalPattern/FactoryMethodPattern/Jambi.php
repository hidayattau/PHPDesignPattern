<?php

class Jambi implements Provinsi
{
    private $ibukota;
    
    public function __construct()
    {
        $this->ibukota = "Jambi";
    }
    
    public function getIbukota()
    {
        return $this->ibukota;
    }
}