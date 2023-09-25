<?php
include 'conexao_bd.php';

class cidadao {
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
    
    //Construtor da classe
    //Os valores $nome = null e demais são usados assim para permitir que a classe seja criada 
    //sem passar todos os valores para ela
    function __construct($nome = null, $email = null, $celular = null, $logradouro = null, $bairro = null, $cidade = null, $login = null, $senha = null, $status = null) {
        $this->nome = $nome;
        $this->email = $email;
        $this->celular = $celular;
        $this->logradouro = $logradouro;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->login = $login;
        $this->senha = $senha;
        $this->status = $status;
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

    //Métodos
    
    function autoCadastrar()
    {
        $sql = "INSERT INTO cidadao(bairro,celular,cidade,email,login,logradouro,nome,senha,status) ";
        $sql .= " VALUES('$this->bairro','$this->celular','$this->cidade','$this->email','$this->login','$this->logradouro','$this->nome','$this->senha','$this->status') ";
    
        return executarComando($sql);
        
    }
    
    function removerConta()
    {
        $sql = "UPDATE cidadao SET status = 'inativo' WHERE login = '$this->login'";
        return executarComando($sql);
    }
    
    function fazerLogin()
    {
        $sql = "SELECT * FROM cidadao WHERE login = '$this->login' AND senha = '$this->senha'";
        
        $resultado = retornarDados($sql);
        
       
        
        if (mysqli_num_rows($resultado) > 0)
        {
            $linha = mysqli_fetch_assoc($resultado);
        
            $this->nome = $linha["nome"];
            $this->email = $linha["email"];
            $this->logradouro = $linha["logradouro"];
            $this->bairro = $linha["bairro"];
            $this->cidade = $linha["cidade"];
            $this->login = $linha["login"];
            $this->senha = $linha["senha"];
            $this->status = $linha["status"];
            
           return true;
        }
        else
        {
            return false;
        }
    }
    function trocarSenha()
    {
        $sql = "UPDATE cidadao SET senha = '$this->senha' WHERE login = '$this->login'";
    
        return executarComando($sql);
    }
    
    function atualizarDados()
    {
        $sql = "UPDATE cidadao SET nome = '$this->nome', email = '$this->email', ";
        $sql .= " celular = '$this->celular', logradouro = '$this->logradouro', ";
        $sql .= " bairro = '$this->bairro', cidade = '$this->cidade', senha = '$this->senha' WHERE login = '$this->login' ";
           
        return executarComando($sql);     
             
    }
    
    
}
