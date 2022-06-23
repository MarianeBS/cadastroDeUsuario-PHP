<?php

class Pessoa{

    private $nome;
    private $endereco;
    private $bairro;
    private $cep;

    //SetNome:
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    //GetNome:
    public function getNome()
    {
        return $this->nome;
    }


    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }


    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    public function getBairro()
    {
        return $this->bairro;
    }


    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    public function getCep()
    {
        return $this->cep;
    }
}

?>