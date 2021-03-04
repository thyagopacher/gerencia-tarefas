<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    Class Pessoa{
        
        public $codigo;
        public $nome;
        public $cpf;
        public $login;
        public $senha;
        public $nascimento;
        public $telefone;
        public $email;
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
        
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }
        
        public function getCpf(){
            return $this->cpf;
        }         
        
        public function setLogin($login){
            $this->login = $login;
        }
        
        public function getLogin(){
            return $this->login;
        }         
     
        public function setSenha($senha){
            $this->senha = $senha;
        }
        
        public function getSenha(){
            return $this->senha;
        }         
        
        public function setNascimento($nascimento){
            $this->nascimento = $nascimento;
        }
        
        public function getNascimento(){
            return $this->nascimento;
        }         
        
        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }
        
        public function getTelefone(){
            return $this->telefone;
        }         
        
        public function setEmail($email){
            $this->email = $email;
        }
        
        public function getEmail(){
            return $this->email;
        }         
        
        public function setCep($cep){
            $this->cep = $cep;
        }
        
        public function getCep(){
            return $this->cep;
        }         
        
        public function setTipologradouro($tipologradouro){
            $this->tipologradouro = $tipologradouro;
        }
        
        public function getTipologradouro(){
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
