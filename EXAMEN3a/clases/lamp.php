<?php
require_once "autoloader.php";

class Lamp{
    private $id;
    private $nombre;
    private $encendido;
    private $modelo;
    private $potencia;
    private $zona;

    public function __construct($id, $nombre, $encendido, $modelo, $potencia, $zona){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->encendido = $encendido;
        $this->modelo = $modelo;
        $this->potencia = $potencia;
        $this->zona = $zona;
    }

    public function getId(){
        return $this->id;
    }
        
    public function getNombre(){
        return $this->nombre;
    }

    public function getEncendido(){
        return $this->encendido;
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function getPotencia(){
        return $this->potencia;
    }

    public function getZona(){
        return $this->zona;
    }

    public function encender(){
        $this->encendido = true;
    }

    public function apagar(){
        $this->encendido = false;
    }

}










