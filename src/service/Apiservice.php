<?php
namespace Src\service;
use Src\modelo\Gatos;
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ ."/../../");
$dotenv->load();
define("URL", $_ENV['URL_BASE'].$_ENV['API_KEY']."&q=".$_ENV['PALABRA']);
class Apiservice{
    public function getGatos(): array
    {
        $gatos = [];
        $datos = file_get_contents(URL);
        $datosJson = json_decode($datos);
        $datosGatos = $datosJson->hits;
        foreach ($datosGatos as $objGato) {
            $gatos[] = (new Gatos)->setImagen($objGato->webformatURL)
            ->setLikes($objGato->likes)
            ->setAutor($objGato->user);
        }
        
        return $gatos;
        
    }
}