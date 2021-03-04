<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    Class Empresa{
        
        public $codigo;
        public $nome;
        public $cnpj;
        public $telefone;
        public $cep;
        public $tipologradouro;
        public $logradouro;
        public $bairro;
        public $cidade;
        public $estado;
        
        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }
        
        public function getCodigo(){
            return $this->codigo;
        }        
        
        public function setNome($nome){
            $this->nome = $nome;
        }
        
        public function getNome(){
            return $this->nome;
        }         
        
        public function setCnpj($cnpj){
            $this->cnpj = $cnpj;
        }
        
        public function getCnpj(){
            return $this->cnpj;
        }                

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        
        public function getTelefone(){
            return $this->telefone;
        }         

        public function setCep($cep){
            $this->cep = $cep;
        }
        
        public function getCep(){
            return $this->cep;
        }         

        public function setTipoLogradouro($tipologradouro){
            $this->tipologradouro = $tipologradouro;
        }
        
        public function getTipoLogradouro(){
            return $this->tipologradouro;
        }            
        
        public function setLogradouro($logradouro){
            $this->logradouro = $logradouro;
        }
        
        public function getLogradouro(){
            return $this->logradouro;
        }         
        
        public function setBairro($bairro){
            $this->bairro = $bairro;
        }
        
        public function getBairro(){
            return $this->bairro;
        }         
        
        public function setCidade($cidade){
            $this->cidade = $cidade;
        }
        
        public function getCidade(){
            return $this->cidade;
        }         
     
        public function setEstado($estado){
            $this->estado = $estado;
        }
        
        public function getEstado(){
            return $this->estado;
        }         
        
    }
?>
