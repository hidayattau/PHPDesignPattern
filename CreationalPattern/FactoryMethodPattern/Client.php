<?php

error_reporting(E_ALL | E_STRICT);
ini_set("display_errors",1);

function includeAll($className)
{
    include_once($className . '.php');
}

spl_autoload_register('includeAll');

class Client
{
    private $ibukotaFactory;
    
    public function __construct()
    {
        $this->ibukotaFactory = new IbukotaFactory();
        
        echo $this->ibukotaFactory->doFactory(new NanggroeAcehDarussalam());
    }
}

$db = new Client();