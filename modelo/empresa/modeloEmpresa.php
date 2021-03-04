<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include_once("../../modelo/Conexao.php");
    
    Class ModeloEmpresa{
        
        public $con;
        
        public function conectar(){
            $con = new Conexao();
            $con->conectar();
        }
        
        public function inserir(Empresa $empresa){
            try{
                $this->conectar();
                $sqlinsert = "INSERT INTO empresa(nome, cnpj, telefone, logradouro, tipologradouro, numero, bairro, cep, cidade, estado) 
                VALUES ('$empresa->nome', '$empresa->cnpj', '$empresa->telefone', '$empresa->logradouro', '$empresa->tipologradouro', '$empresa->numero', '$empresa->bairro
                ', '$empresa->cep', '$empresa->cidade', '$empresa->estado')"; 
                mysql_query($sqlinsert) or die ("Erro ao inserir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }
        
        public function atualizar(Empresa $empresa){
            try{
                $this->conectar();
                $sqlinsert = "update empresa set nome = '$empresa->nome',  cnpj = ' $empresa->cnpj'
                ,  telefone = '$empresa->telefone ' ,  logradouro = ' $empresa->logradouro', tipologradouro = '$empresa->tipologradouro', numero = '$empresa->numero 
                ',  bairro = '$empresa->bairro ',  cep = '$empresa->cep',  cidade = '$empresa->cidade'
                ,  estado = '$empresa->estado '"; 
                mysql_query($sqlinsert) or die ("Erro ao atualizar");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }   
        
        public function excluir($codigo){
            try{
                $this->conectar();
                $sqlinsert = "delete from empresa where codigo = '" . $codigo . "'"; 
                mysql_query($sqlinsert) or die ("Erro ao excluir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }         
        
        public function procuraTodos(){
            $this->conectar();
            $busca = "SELECT * FROM empresa order by nome desc";
            return mysql_query("$busca");          
        }
        
        public function procuraCodigo($codigo){
            $this->conectar();
            $busca = "SELECT * FROM empresa WHERE codigo = '$codigo'";
            return mysql_query($busca);    
        }
        
        public function procuraNomeParcial($nome){
            $this->conectar();
            $busca = "SELECT * FROM empresa WHERE nome like '%$nome%'";
            return mysql_query($busca);    
        }        
        
        public function procuraNomeExata($nome){
            $this->conectar();
            $busca = "SELECT * FROM empresa WHERE nome = '$nome'";
            return mysql_query($busca);    
        }        
      
    }
?>

