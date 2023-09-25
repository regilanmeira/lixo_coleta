<?php
class coletor {
    //atributos
    private $nome;
    private $email;
    private $celular;
    private $logradouro;
    private $bairro;
    private $cidade;
    private $login;
    private $senha;
    private $status;
    private $tipoPessoa;
    
    //Construtor da classe
    function __construct($nome = null, $email = null, $celular = null, $logradouro = null, $bairro = null, $cidade = null, $login = null, $senha = null, $status = null, $tipoPessoa = null) 
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->celular = $celular;
        $this->logradouro = $logradouro;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->login = $login;
        $this->senha = $senha;
        $this->status = $status;
        $this ->tipoPessoa = $tipoPessoa;
    }

    
    
    //Métodos gets e sets
    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getCelular() {
        return $this->celular;
    }

    function getLogradouro() {
        return $this->logradouro;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getStatus() {
        return $this->status;
    }

    function getTipoPessoa() {
        return $this->tipoPessoa;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setTipoPessoa() {
        $this->tipoPessoa = $tipoPessoa;
    }

    //Métodos
    
    function autoCadastrar()
    {
        echo "Sua conta foi criado";
    }
    
    function fazerLogin()
    {
        
    }
    
    function escolhaDenuncia()
    {
        
    }
    
    function alterarStatus()
    {

    }

    function observacaoDenuncia()
    {

    }
  
}