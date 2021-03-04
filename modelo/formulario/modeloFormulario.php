<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include_once("../../modelo/Conexao.php");
    
    Class ModeloFormulario{
        
        public $con;
        
        public function conectar(){
            $con = new Conexao();
            $con->conectar();
        }
        
        public function inserir(Formulario $formulario){
            try{
                $this->conectar();
                $sqlinsert = "INSERT INTO formulario(nome, acao, metodo) 
                VALUES ('$formulario->nome', '$formulario->acao', '$formulario->metodo')"; 
                mysql_query($sqlinsert) or die ("Erro ao inserir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }
        
        public function atualizar(Formulario $formulario){
            try{
                $this->conectar();
                $sqlinsert = "update formulario set nome = '".$formulario->nome."',  acao = '" . $formulario->acao . "'" .
                ",  login = '" . $formulario->metodo . "' where codigo = '" . $formulario->codigo . "'"; 
                mysql_query($sqlinsert) or die ("Erro ao atualizar");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }   
        
        public function excluir($codigo){
            try{
                $this->conectar();
                $sqlinsert = "delete from formulario where codigo = '" . $codigo . "'"; 
                mysql_query($sqlinsert) or die ("Erro ao excluir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }         
        
        public function procuraTodos(){
            $this->conectar();
            $busca = "SELECT * FROM formulario order by nome desc";
            return mysql_query("$busca");          
        }
        
        public function procuraCodigo($codigo){
            $this->conectar();
            $busca = "SELECT * FROM formulario WHERE codigo = '$codigo'";
            return mysql_query($busca);    
        }
        
        public function procuraNomeParcial($nome){
            $this->conectar();
            $busca = "SELECT * FROM formulario WHERE nome like '%$nome%'";
            return mysql_query($busca);    
        }        
        
        public function procuraNomeExata($nome){
            $this->conectar();
            $busca = "SELECT * FROM formulario WHERE nome = '$nome'";
            return mysql_query($busca);    
        }        
     
    }
?>

