<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include ("../../modelo/Conexao.php");
    
    Class ModeloCatSite{
        
        public $con;
        
        public function conectar(){
            $con = new Conexao();
            $con->conectar();
        }
        
        public function inserir(CatSite $catsite){
            try{
                $this->conectar();
                $sqlinsert = "INSERT INTO catsite(nome, descricao) 
                VALUES ('$catsite->nome', '$catsite->descricao')"; 
                mysql_query($sqlinsert) or die ("Erro ao inserir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }
        
        public function atualizar(CatSite $catsite){
            try{
                $this->conectar();
                $sqlinsert = "update catsite set nome = '$catsite->nome', descricao = '$catsite->descricao' where codigo = '" . $catsite->codigo . "'"; 
                mysql_query($sqlinsert) or die ("Erro ao atualizar");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }   
        
        public function excluir($codigo){
            try{
                $this->conectar();
                $sqlinsert = "delete from catsite where codigo = '" . $codigo . "'"; 
                mysql_query($sqlinsert) or die ("Erro ao excluir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }         
        
        public function procuraTodos(){
            $this->conectar();
            $busca = "SELECT * FROM catsite order by nome desc";
            return mysql_query("$busca");          
        }
        
        public function procuraCodigo($codigo){
            $this->conectar();
            $busca = "SELECT * FROM catsite WHERE codigo = '$codigo'";
            return mysql_query($busca);    
        }
        
        public function procuraNomeParcial($nome){
            $this->conectar();
            $busca = "SELECT * FROM catsite WHERE nome like '%$nome%'";
            return mysql_query($busca);    
        }        
        
        public function procuraNomeExata($nome){
            $this->conectar();
            $busca = "SELECT * FROM catsite WHERE nome = '$nome'";
            return mysql_query($busca);    
        }        
    
    }
?>

