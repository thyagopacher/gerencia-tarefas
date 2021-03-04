<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    Class Formulario{
        
        public $codigo;
        public $nome;
        public $acao;
        public $metodo;

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
        
        public function setAcao($acao){
            $this->acao = $acao;
        }
        
        public function getAcao(){
            return $this->acao;
        }         
        
        public function setMetodo($metodo){
            $this->metodo = $metodo;
        }
        
        public function getMetodo(){
            return $this->metodo;
        }         
     
    }
?>
