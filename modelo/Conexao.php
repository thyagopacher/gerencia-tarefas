<?php

    class Conexao{ 
        public function conectar(){
            try{
               $host       = "mysql.obadescontos.com.br";    // MySQL hostname 
               $usuario    = "obadescontos21";      // MySQL user
               $senha      = "bcsistema";   // MySQL password
               $banco      = "obadescontos21";     // MySQL database name containing phpSecurePages table
               mysql_connect("$host", "$usuario", "$senha")or die ("<script>alert('Não conseguiu autenticar usuário');</script>");
               mysql_select_db("$banco") or die("<script>alert('Não conseguiu selecionar o banco de dados');</script>");
              # Aqui está o segredo, evitando caracteres estranhos ao gravar dados no banco
               mysql_query("SET NAMES 'utf8'");
               mysql_query('SET character_set_connection=utf8');
               mysql_query('SET character_set_client=utf8');
               mysql_query('SET character_set_results=utf8');               
            }catch(Exception $ex){
                echo("Erro ao tentar conectar causado por:".$ex);
            }            
        }
    }
    

?>