<?php
class denuncia_historico {
    //atributos
    private $idHistorico;
    private $idDenuncia;
    private $loginColetor;
    private $dataHistorico;
    private $status;
    private $observacao;
    
    //construtor
    function __construct($idDenuncia = null, $loginColetor = null, $dataHistorico = null, $status = null, $observacao = null) {
        $this->idDenuncia = $idDenuncia;
        $this->loginColetor = $loginColetor;
        $this->dataHistorico = $dataHistorico;
        $this->status = $status;
        $this->observacao = $observacao;
    }
    
    
    function getIdHistorico() {
        return $this->idHistorico;
    }

    function getIdDenuncia() {
        return $this->idDenuncia;
    }

    function getLoginColetor() {
        return $this->loginColetor;
    }

    function getDataHistorico() {
        return $this->dataHistorico;
    }

    function getStatus() {
        return $this->status;
    }

    function getObservacao() {
        return $this->observacao;
    }

    function setIdHistorico($idHistorico) {
        $this->idHistorico = $idHistorico;
    }

    function setIdDenuncia($idDenuncia) {
        $this->idDenuncia = $idDenuncia;
    }

    function setLoginColetor($loginColetor) {
        $this->loginColetor = $loginColetor;
    }

    function setDataHistorico($dataHistorico) {
        $this->dataHistorico = $dataHistorico;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setObservacao($observacao) {
        $this->observacao = $observacao;
    }

    
        
    //Métodos
    
    function gerarHistorico()
    {
       
    }
    
  
}