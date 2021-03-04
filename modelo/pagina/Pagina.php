<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    Class Pagina{
        
        public $codigo;
        public $site;
        public $titulo;
        public $palavrachave;
        public $conteudo;
      
        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }
        
        public function getCodigo(){
            return $this->codigo;
        }            
        
        public function setSite($site){
            $this->site = $site;
        }
        
        public function getSite(){
            return $this->site;
        }           

        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        
        public function getTitulo(){
            return $this->titulo;
        }          

        public function setPalavrachave($palavrachave){
            $this->palavrachave = $palavrachave;
        }
        
        public function getPalavrachave(){
            return $this->palavrachave;
        }           
        
        public function setConteudo($conteudo){
            $this->conteudo = $conteudo;
        }
        
        public function getConteudo(){
            return $this->conteudo;
        }           
    }
    
?>
