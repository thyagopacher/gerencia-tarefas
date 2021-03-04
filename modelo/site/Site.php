<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    Class Site{
        
        public $codigo;
        public $nome;
        
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
      
    }
?>
