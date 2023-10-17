<?php
include 'conexao_bd.php';
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
       $sql = "INSERT INTO denuncia(loginCidadao,dataOcorrido,descricaoDenuncia,descricaoLugar,foto,latitude,longitude,status) ";
       $sql .= "VALUES ('$this->loginCidadao','$this->dataOcorrido','$this->descricaoDenuncia','$this->descricaoLugar','$this->foto','$this->latitude','$this->longitude','$this->status') ";
    
       return executarComando($sql);
    }
    
    function removerDenuncia()
    {
        $sql = "DELETE FROM denuncia WHERE idDenuncia='$this->idDenuncia'";
        
        return executarComando($sql);
    }

    function mudarStatus()
    {
        $sql = "UPDATE denuncia SET status='$this->status' WHERE idDenuncia='$this->idDenuncia'";
        
        return executarComando($sql);
    }
    
    //OBSERVAÇÃO:
    //Atualizar todas as colunas de DENUNCIA
    function atualizarDenuncia()
    {
        $sql = "UPDATE denuncia SET descricaoDenuncia = '$this->descricaoDenuncia', ";
        $sql .= " descricaoLugar = '$this->descricaoLugar', ";
        
        return executarComando($sql);
    }
    
     function mostrarDenuncias()
    {
        $sql = "SELECT * FROM denuncia WHERE status = '$this->status' ORDER BY idDenuncia DESC ";
        
        $resultado = retornarDados($sql);
        
       return $resultado;
    }
    
    function mostrarDadosDenuncia()
    {
        $sql = "SELECT * FROM denuncia WHERE idDenuncia = '$this->idDenuncia' ";
        
        $resultado = retornarDados($sql);
        
        
        
         if (mysqli_num_rows($resultado) > 0)
        {
            $linha = mysqli_fetch_assoc($resultado);
        
            $this->dataOcorrido = $linha["dataOcorrido"];
            $this->descricaoDenuncia = $linha["descricaoDenuncia"];
            $this->descricaoLugar = $linha["descricaoLugar"];
            $this->foto = $linha["foto"];
            $this->latitude = $linha["latitude"];
            $this->longitude = $linha["longitude"];
            $this->loginCidadao = $linha["loginCidadao"];
            $this->status = $linha["status"];
          
            
           return true;
        }
        else
        {
            return false;
        }
    }
    
    function exibirDenunciasCidadao()
    {
        $sql = "SELECT * FROM denuncia WHERE loginCidadao = '$this->loginCidadao' ORDER BY IdDenuncia DESC";
        
        $resultado = retornarDados($sql);
        
        return $resultado;
        
    }
    
    
}  
  