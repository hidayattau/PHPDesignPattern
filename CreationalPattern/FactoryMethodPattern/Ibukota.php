<?php

abstract class Ibukota
{
    protected abstract function factoryMethod(Provinsi $provinsi);
    
    public function doFactory($provinsi)
    {
        return $this->factoryMethod($provinsi);
    }
}