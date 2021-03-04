<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    Class CampoFormulario{
        
        public $codigo;
        public $nome;
        public $tipo;
        public $componente;
        public $requerido;
        public $codformulario;
        
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
        
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
        
        public function getTipo(){
            return $this->tipo;
        }         
        
        public function setComponente($componente){
            $this->componente = $componente;
        }
        
        public function getComponente(){
            return $this->componente;
        }         
     
        public function setRequerido($requerido){
            $this->requerido = $requerido;
        }
        
        public function getRequerido(){
            return $this->requerido;
        }  
     
        public function setCodformulario($codformulario){
            $this->codformulario = $codformulario;
        }
        
        public function getCodformulario(){
            return $this->codformulario;
        }             
    }
?>
