<?php
class denuncia {
    //atributos
    private $idDenuncia;
    private $dataOcorrido;
    private $descricaoDenuncia;
    private $descricaoLugar;
    private $foto;
    private $latitude;
    private $longitude;
    private $loginCidadao;
    private $status;
    
    
    function __construct($dataOcorrido = null, $descricaoDenuncia = null, $descricaoLugar = null, $foto = null, $latitude = null, $longitude = null, $loginCidadao = null, $status = null) {
        
        $this->dataOcorrido = $dataOcorrido;
        $this->descricaoDenuncia = $descricaoDenuncia;
        $this->descricaoLugar = $descricaoLugar;
        $this->foto = $foto;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->loginCidadao = $loginCidadao;
        $this->status = $status;
    }

    
    function getIdDenuncia() {
        return $this->idDenuncia;
    }

    function getDataOcorrido() {
        return $this->dataOcorrido;
    }

    function getDescricaoDenuncia() {
        return $this->descricaoDenuncia;
    }

    function getDescricaoLugar() {
        return $this->descricaoLugar;
    }

    function getFoto() {
        return $this->foto;
    }

    function getLatitude() {
        return $this->latitude;
    }

    function getLongitude() {
        return $this->longitude;
    }

    function getLoginCidadao() {
        return $this->loginCidadao;
    }

    function getStatus() {
        return $this->status;
    }

    function setIdDenuncia($idDenuncia) {
        $this->idDenuncia = $idDenuncia;
    }

    function setDataOcorrido($dataOcorrido) {
        $this->dataOcorrido = $dataOcorrido;
    }

    function setDescricaoDenuncia($descricaoDenuncia) {
        $this->descricaoDenuncia = $descricaoDenuncia;
    }

    function setDescricaoLugar($descricaoLugar) {
        $this->descricaoLugar = $descricaoLugar;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    function setLongitude($longitude) {
        $this->longitude = $longitude;
    }

    function setLoginCidadao($loginCidadao) {
        $this->loginCidadao = $loginCidadao;
    }

    function setStatus($status) {
        $this->status = $status;
    }

        
    
    
    //Métodos
    
    function fazerDenuncia()
    {
       
    }
    
    function removerDenuncia()
    {
        
    }

    function mudarStatus()
    {

    }
}  
  