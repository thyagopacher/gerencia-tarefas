<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    Class CatSite{
        
        public $codigo;
        public $nome;
        public $descricao;
        
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
        
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
        
        public function getDescricao(){
            return $this->descricao;
        }           
    }
?>
