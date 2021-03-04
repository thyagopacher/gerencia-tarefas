<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    Class Reuniao{
        
        public $codigo;
        public $data;
        public $hora;
        public $assunto;
        public $descricao;
        
        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }
        
        public function getCodigo(){
            return $this->codigo;
        }        
        
        public function setData($data){
            $this->data = $data;
        }
        
        public function getData(){
            return $this->data;
        }         
        
        public function setHora($hora){
            $this->hora = $hora;
        }
        
        public function getHora(){
            return $this->hora;
        }   
        
        public function setAssunto($assunto){
            $this->assunto = $assunto;
        }
        
        public function getDescricao(){
            return $this->descricao;
        }      
        
        public function setDescricao(){
            return $this->descricao;
        }           
    }
?>
