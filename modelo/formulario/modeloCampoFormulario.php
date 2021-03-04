<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include_once("../../modelo/Conexao.php");
    
    Class ModeloCampoFormulario{
        
        public $con;
        
        public function conectar(){
            $con = new Conexao();
            $con->conectar();
        }
        
        public function inserir(CampoFormulario $formulario){
            try{
                $this->conectar();
                $sqlinsert = "INSERT INTO campos_formulario(nome, tipo, componente, requerido, codformulario) 
                VALUES ('$formulario->nome', '$formulario->tipo', '$formulario->componente', '$formulario->requerido', '$formulario->codformulario')"; 
                mysql_query($sqlinsert) or die ("Erro ao inserir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }
        
        public function atualizar(CampoFormulario $formulario){
            try{
                $this->conectar();
                $sqlinsert = "update campos_formulario set nome = '$formulario->nome',  tipo = ' $formulario->tipo '" .
                ",  componente = '$formulario->componente', requerido = '$formulario->requerido', codformulario = '$formulario->codformulario' where codigo = ' $formulario->codigo'"; 
                mysql_query($sqlinsert) or die ("Erro ao atualizar");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }   
        
        public function excluir($codigo){
            try{
                $this->conectar();
                $sqlinsert = "delete from campos_formulario where codigo = '" . $codigo . "'"; 
                mysql_query($sqlinsert) or die ("Erro ao excluir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }         
        
        public function procuraTodos(){
            $this->conectar();
            $busca = "SELECT * FROM campos_formulario order by nome desc";
            return mysql_query("$busca");          
        }
        
        public function procuraCodigo($codigo){
            $this->conectar();
            $busca = "SELECT * FROM campos_formulario WHERE codigo = '$codigo'";
            return mysql_query($busca);    
        }
        
        public function procuraNomeParcial($nome){
            $this->conectar();
            $busca = "SELECT * FROM campos_formulario WHERE nome like '%$nome%'";
            return mysql_query($busca);    
        }        
        
        public function procuraNomeExata($nome){
            $this->conectar();
            $busca = "SELECT * FROM campos_formulario WHERE nome = '$nome'";
            return mysql_query($busca);    
        }        
     
    }
?>

