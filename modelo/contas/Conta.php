<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    Class Conta{
        
        public $codigo;
        public $tipoconta;
        public $vencimento;
        public $valor;
        
        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }
        
        public function getCodigo(){
            return $this->codigo;
        }        
        
        public function setTipoconta($tipoconta){
            $this->tipoconta = $tipoconta;
        }
        
        public function getTipoconta(){
            return $this->tipoconta;
        }         
        
        public function setVencimento($vencimento){
            $this->vencimento = $vencimento;
        }
        
        public function getVencimento(){
            return $this->vencimento;
        }   
        
        public function setValor($valor){
            $this->valor = $valor;
        }
        
        public function getValor(){
            return $this->valor;
        }           
    }
?>
