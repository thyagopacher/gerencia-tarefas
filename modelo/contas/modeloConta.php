<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include ("../../modelo/Conexao.php");
    
    Class ModeloConta{
        
        public $con;
        
        public function conectar(){
            $con = new Conexao();
            $con->conectar();
        }
        
        public function inserir(Conta $conta){
            try{
                $this->conectar();
                $sqlinsert = "INSERT INTO conta(tipoconta, vencimento, valor) 
                VALUES ('$conta->tipoconta', '$conta->vencimento', '$conta->valor')"; 
                mysql_query($sqlinsert) or die ("Erro ao inserir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }
        
        public function atualizar(Conta $conta){
            try{
                $this->conectar();
                $sqlinsert = "update conta set tipoconta = '$conta->tipoconta', vencimento = '$conta->vencimento', valor = '$conta->valor' where codigo = '" . $conta->codigo . "'"; 
                mysql_query($sqlinsert) or die ("Erro ao atualizar");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }   
        
        public function excluir($codigo){
            try{
                $this->conectar();
                $sqlinsert = "delete from conta where codigo = '" . $codigo . "'"; 
                mysql_query($sqlinsert) or die ("Erro ao excluir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }         
        
        public function procuraTodos(){
            $this->conectar();
            $busca = "SELECT * FROM conta order by nome desc";
            return mysql_query("$busca");          
        }
        
        public function procuraCodigo($codigo){
            $this->conectar();
            $busca = "SELECT * FROM conta WHERE codigo = '$codigo'";
            return mysql_query($busca);    
        }
        
        public function procuraNomeParcial($nome){
            $this->conectar();
            $busca = "SELECT * FROM conta WHERE tipoconta like '%$nome%'";
            return mysql_query($busca);    
        }        
        
        public function procuraNomeExata($nome){
            $this->conectar();
            $busca = "SELECT * FROM conta WHERE tipoconta = '$nome'";
            return mysql_query($busca);    
        }        
    
    }
?>

