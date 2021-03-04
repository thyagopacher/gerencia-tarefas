<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
     include_once ("../../modelo/Conexao.php");
    
    Class ModeloTipoPessoa{
        
        public $con;
        
        public function conectar(){
            $con = new Conexao();
            $con->conectar();
        }
        
        public function inserir(TipoPessoa $tipopessoa){
            try{
                $this->conectar();
                $sqlinsert = "INSERT INTO tipopessoa(nome) 
                VALUES ('$tipopessoa->nome')"; 
                mysql_query($sqlinsert) or die ("Erro ao inserir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }
        
        public function atualizar(TipoPessoa $tipopessoa){
            try{
                $this->conectar();
                $sqlinsert = "update tipopessoa set nome = '$tipopessoa->nome' where codigo = '" . $tipopessoa->codigo . "'"; 
                mysql_query($sqlinsert) or die ("Erro ao atualizar");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }   
        
        public function excluir($codigo){
            try{
                $this->conectar();
                $sqlinsert = "delete from tipopessoa where codigo = '" . $codigo . "'"; 
                mysql_query($sqlinsert) or die ("Erro ao excluir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }         
        
        public function procuraTodos(){
            $this->conectar();
            $busca = "SELECT * FROM tipopessoa order by nome asc";
            return mysql_query("$busca");          
        }
        
        public function procuraCodigo($codigo){
            $this->conectar();
            $busca = "SELECT * FROM tipopessoa WHERE codigo = '$codigo'";
            return mysql_query($busca);    
        }
        
        public function procuraNomeParcial($nome){
            $this->conectar();
            $busca = "SELECT * FROM tipopessoa WHERE nome like '%$nome%' order by nome asc";
            return mysql_query($busca);    
        }        
        
        public function procuraNomeExata($nome){
            $this->conectar();
            $busca = "SELECT * FROM tipopessoa WHERE nome = '$nome'";
            return mysql_query($busca);    
        }        
    
    }
?>

