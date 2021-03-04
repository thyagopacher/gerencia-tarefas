<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include ("../../modelo/Conexao.php");
    
    Class ModeloCompromisso{
        
        public $con;
        
        public function conectar(){
            $con = new Conexao();
            $con->conectar();
        }
        
        public function inserir(Compromisso $tarefa){
            try{
                $this->conectar();
                $sqlinsert = "INSERT INTO tarefa(descricao, data, hora, codcliente, codpessoa) 
                VALUES ('$tarefa->nome', '$tarefa->data', '$tarefa->hora', '$tarefa->cliente', '$tarefa->responsavel')"; 
                mysql_query($sqlinsert) or die ("Erro ao inserir, executando a query: $sqlinsert");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }
        
        public function atualizar(Compromisso $tarefa){
            try{
                $this->conectar();
                $sqlinsert = "update tarefa set nome = '$tarefa->nome', 
                data = '$tarefa->data', hora = '$tarefa->hora', cliente = '$tarefa->cliente', 
                responsavel = '$tarefa->responsavel' where codigo = '" . $tarefa->codigo . "'"; 
                mysql_query($sqlinsert) or die ("Erro ao atualizar");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }   
        
        public function excluir($codigo){
            try{
                $this->conectar();
                $sqlinsert = "delete from tarefa where codigo = '" . $codigo . "'"; 
                mysql_query($sqlinsert) or die ("Erro ao excluir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }         
        
        public function procuraTodos(){
            $this->conectar();
            $busca = "SELECT * FROM tarefa order by nome desc";
            return mysql_query("$busca");          
        }
        
        public function procuraCodigo($codigo){
            $this->conectar();
            $busca = "SELECT * FROM tarefa WHERE codigo = '$codigo'";
            return mysql_query($busca);    
        }
        
        public function procuraNomeParcial($nome){
            $this->conectar();
            $busca = "SELECT * FROM tarefa WHERE descricao like '%$nome%'";
            return mysql_query($busca);    
        }        
        
        public function procuraNomeExata($nome){
            $this->conectar();
            $busca = "SELECT * FROM tarefa WHERE descricao = '$nome'";
            return mysql_query($busca);    
        }        
    
    }
?>

