<?php

error_reporting(E_ALL | E_STRICT);
ini_set("display_errors", 1);

function includeAll($className)
{
    include_once($className . '.php');
}

spl_autoload_register('includeAll');

class Client
{
    private $ibukotaProvinsi;
    
    public function __construct($provinsi)
    {
        $this->ibukotaProvinsi = new IbukotaProvinsi();
        
        echo $provinsi . " = " . $this->ibukotaProvinsi->doFactory(new $provinsi()) . PHP_EOL;
    }
}

$provinsi = array("NanggroeAcehDarussalam", "SumatraUtara", "SumatraBarat", "Riau", "KepulauanRiau", "Jambi", "SumatraSelatan", "Bengkulu", "Lampung", "BangkaBelitung", "DKIJakarta", "JawaBarat", "Banten", "JawaTengah", "DaerahIstimewaYogyakarta", "JawaTimur", "Bali", "NusaTenggaraBarat", "NusaTenggaraTimur", "KalimantanBarat", "KalimantanTengah", "KalimantanSelatan", "KalimantanTimur", "KalimantanUtara", "SulawesiUtara", "Gorontalo", "SulawesiTengah", "SulawesiSelatan", "SulawesiBarat", "SulawesiTenggara", "Maluku", "MalukuUtara", "Papua", "PapuaBarat");
foreach($provinsi as $list)
{
    $ibukota = new Client($list);
}