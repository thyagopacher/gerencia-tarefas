<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include ("../../modelo/Conexao.php");
    
    Class ModeloReuniao{
        
        public $con;
        
        public function conectar(){
            $con = new Conexao();
            $con->conectar();
        }
        
        public function inserir(Reuniao $reuniao){
            try{
                $this->conectar();
                $sqlinsert = "INSERT INTO reuniao(data, hora, assunto, descricao) 
                VALUES ('$reuniao->data', '$reuniao->hora', '$reuniao->assunto', '$reuniao->descricao')"; 
                mysql_query($sqlinsert) or die ("Erro ao inserir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }
        
        public function atualizar(Reuniao $reuniao){
            try{
                $this->conectar();
                $sqlinsert = "update reuniao set data = '$reuniao->data', hora = '$reuniao->hora', assunto = '$reuniao->assunto', descricao = '$reuniao->descricao' where codigo = '" . $reuniao->codigo . "'"; 
                mysql_query($sqlinsert) or die ("Erro ao atualizar");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }   
        
        public function excluir($codigo){
            try{
                $this->conectar();
                $sqlinsert = "delete from reuniao where codigo = '" . $codigo . "'"; 
                mysql_query($sqlinsert) or die ("Erro ao excluir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }         
        
        public function inserirAgenda(Reuniao $reuniao){
            try{
                $this->conectar();
                $sqlinsert = "INSERT INTO reuniao(data, hora) 
                VALUES ('$reuniao->data', '$reuniao->hora')"; 
                mysql_query($sqlinsert) or die ("Erro ao inserir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }
        
        public function atualizarAgenda(Reuniao $reuniao){
            try{
                $this->conectar();
                $sqlinsert = "update reuniao set data = '$reuniao->data', hora = '$reuniao->hora' where codigo = '" . $reuniao->codigo . "'"; 
                mysql_query($sqlinsert) or die ("Erro ao atualizar");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }   
           
        public function procuraTodos(){
            $this->conectar();
            $busca = "SELECT * FROM reuniao order by nome desc";
            return mysql_query("$busca");          
        }
        
        public function procuraCodigo($codigo){
            $this->conectar();
            $busca = "SELECT * FROM reuniao WHERE codigo = '$codigo'";
            return mysql_query($busca);    
        }
        
        public function procuraNomeParcial($nome){
            $this->conectar();
            $busca = "SELECT * FROM reuniao WHERE assunto like '%$nome%'";
            return mysql_query($busca);    
        }        
        
        public function procuraNomeExata($nome){
            $this->conectar();
            $busca = "SELECT * FROM reuniao WHERE assunto = '$nome'";
            return mysql_query($busca);    
        }        
    
        public function procuraDataExata($data){
            $this->conectar();
            $busca = "SELECT * FROM reuniao WHERE data = '$data'";
            return mysql_query($busca);    
        }         
        
        public function procuraDataParcial($data){
            $this->conectar();
            $busca = "SELECT * FROM reuniao WHERE data like '%$data%'";
            return mysql_query($busca);    
        }         
        
    }
?>

