<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include ("../../modelo/Conexao.php");

    Class ModeloPagina{
        
        public $con;
        
        public function conectar(){
            $con = new Conexao();
            $con->conectar();
        }
        
        public function inserir(Pagina $pagina){
            try{
                $this->conectar();
                $sqlinsert = "INSERT INTO pagina(conteudo) 
                VALUES ('$pagina->conteudo')"; 
                mysql_query($sqlinsert) or die ("Não foi possível inserir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }
        
        public function atualizar(Pagina $pagina){
            try{
                $this->conectar();
                $sqlinsert = "update pagina set conteudo = '$pagina->conteudo' where codigo = '$pagina->codigo'"; 
                mysql_query($sqlinsert) or die ("Não foi possível inserir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }   
        
        public function excluir($codigo){
            try{
                $this->conectar();
                $sqlinsert = "delete from pagina where codigo = '" . $codigo . "'"; 
                mysql_query($sqlinsert) or die ("Não foi possível inserir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }         
        
        public function procuraTodos(){
            $this->conectar();
            $busca = "SELECT * FROM pagina order by nome desc";
            return mysql_query("$busca");          
        }
        
        public function procuraCodigo($codigo){
            $this->conectar();
            $busca = "SELECT * FROM pagina WHERE codigo = '$codigo'";
            return mysql_query($busca);    
        }
        
        public function procuraNomeParcial($nome){
            $this->conectar();
            $busca = "SELECT * FROM pagina WHERE nome like '%$nome%'";
            return mysql_query($busca);    
        }        
        
        public function procuraNomeExata($nome){
            $this->conectar();
            $busca = "SELECT * FROM pagina WHERE nome = '$nome'";
            return mysql_query($busca);    
        }        
 
    }
?>

