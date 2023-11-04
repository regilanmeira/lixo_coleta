<?php
include 'conexao_bd.php';
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
        $this->tipoPessoa = $tipoPessoa;
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
    
    //Métodos
   
    function autoCadastrar()
    {
        $sql = "INSERT INTO coletor(nome,email,celular,logradouro,bairro,cidade,login,senha,status,tipoPessoa) ";
        $sql .= " VALUES('$this->nome','$this->email','$this->celular','$this->logradouro','$this->bairro','$this->cidade','$this->login','$this->senha','$this->status','$this->tipoPessoa') ";
        
        return executarComando($sql);
    }
    
    function fazerLogin()
    {
        $sql = "SELECT * FROM coletor WHERE login = '$this->login' AND senha = '$this->senha'";
        
        $resultado = retornarDados($sql);
        
        if (mysqli_num_rows($resultado) > 0)
        {
            $linha = mysqli_fetch_assoc($resultado);
        
            $this->nome = $linha["nome"];
            $this->email = $linha["email"];
            $this->celular = $linha["celular"];
            $this->logradouro = $linha["logradouro"];
            $this->bairro = $linha["bairro"];
            $this->cidade = $linha["cidade"];
            $this->login = $linha["login"];
            $this->senha = $linha["senha"];
            $this->status = $linha["status"];
            $this ->tipoPessoa = $linha["tipoPessoa"];
            
           return true;
        }
        else
        {
            return  false;
        }
    }
        function exibirMeusDados()
    {
        $sql = "SELECT * FROM coletor WHERE login = '$this->login'";
        
        $resultado = retornarDados($sql);
        
       
        
        if (mysqli_num_rows($resultado) > 0)
        {
            $linha = mysqli_fetch_assoc($resultado);
        
            $this->nome = $linha["nome"];
            $this->email = $linha["email"];
            $this->logradouro = $linha["logradouro"];
            $this->celular = $linha["celular"];
            $this->bairro = $linha["bairro"];
            $this->cidade = $linha["cidade"];
            $this->login = $linha["login"];
            $this->senha = $linha["senha"];
            $this->status = $linha["status"];
            $this->tipoPessoa = $linha["tipoPessoa"];
            
           return true;
        }
        else
        {
            return false;
        }
    }
    
    //Incluir o atualizar com todos os dados do coleteor
    function removerConta()
    {
       $sql = "UPDATE coletor SET status = 'Inativo' WHERE login = '$this->login'";
        return executarComando($sql);
    }
    
     function trocarSenha()
    {
        $sql = "UPDATE coletor SET senha = '$this->senha' WHERE login = '$this->login'";
    
        return executarComando($sql);
    }
   
    function atualizarDados()
    {
        $sql = "UPDATE coletor SET nome = '$this->nome', email = '$this->email', ";
        $sql .= " celular = '$this->celular', logradouro = '$this->logradouro', ";
        $sql .= " bairro = '$this->bairro', cidade = '$this->cidade', senha = '$this->senha' , tipoPessoa = '$this->tipoPessoa' WHERE login = '$this->login' ";
           
        return executarComando($sql);     
             
    }
   
    function observacaoDenuncia()
    {
        
    }
  
}