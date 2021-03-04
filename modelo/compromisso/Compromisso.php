<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    Class Compromisso{
        
        public $codigo;
        public $nome;
        public $data;
        public $hora;
        public $cliente;
        public $responsavel;
        
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
        
        public function setCliente($cliente){
            $this->cliente = $cliente;
        }
        
        public function getCliente(){
            return $this->cliente;
        }        
        
        public function setResponsavel($responsavel){
            $this->responsavel = $responsavel;
        }
        
        public function getResponsavel(){
            return $this->responsavel;
        }      
    }
?>
