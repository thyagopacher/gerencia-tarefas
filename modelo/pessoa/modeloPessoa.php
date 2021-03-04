<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include_once("../../modelo/Conexao.php");
    
    Class ModeloPessoa{
        
        public $con;
        
        public function conectar(){
            $con = new Conexao();
            $con->conectar();
        }
        
        public function inserir(Pessoa $pessoa){
            try{
                $this->conectar();
                $sqlinsert = "INSERT INTO pessoa(nome, email, login, senha, tipologradouro, logradouro, estado, cep, nascimento, telefone, cpf) 
                VALUES ('$pessoa->nome', '$pessoa->email', '$pessoa->login', '$pessoa->senha', '$pessoa->tipologradouro', '$pessoa->logradouro
                ', '$pessoa->estado', '$pessoa->cep', '$pessoa->nascimento', '$pessoa->telefone','$pessoa->cpf')"; 
                mysql_query($sqlinsert) or die ("Erro ao inserir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }
        
        public function atualizar(Pessoa $pessoa){
            try{
                $this->conectar();
                $sqlinsert = "update pessoa set nome = '".$pessoa->nome."',  email = '" . $pessoa->email . "'" .
                ",  login = '" . $pessoa->login . "' ,  senha = '" . $pessoa->senha . "',  tipologradouro = '" . $pessoa->tipologradouro .
                "',  logradouro = '" . $pessoa->logradouro . "',  cep = '" . $pessoa->cep . "',  nascimento = '" . $pessoa->nascimento . "'" .
                ",  estado = '" . $pessoa->estado . "',  telefone = '". $pessoa->telefone . "',  cpf = '" . $pessoa->cpf . "'" .
                ", bairro = '$pessoa->bairro', cidade = '$pessoa->cidade' where codigo = '" . $pessoa->codigo . "'"; 
                mysql_query($sqlinsert) or die ("Erro ao atualizar");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }   
        
        public function excluir($codigo){
            try{
                $this->conectar();
                $sqlinsert = "delete from pessoa where codigo = '" . $codigo . "'"; 
                mysql_query($sqlinsert) or die ("Erro ao excluir");                  
            }catch(Exception $ex){
                return "Erro causado por:". $ex;
            }
        }         
        
        public function procuraTodos(){
            $this->conectar();
            $busca = "SELECT * FROM pessoa order by nome desc";
            return mysql_query("$busca");          
        }
        
        public function procuraCodigo($codigo){
            $this->conectar();
            $busca = "SELECT * FROM pessoa WHERE codigo = '$codigo'";
            return mysql_query($busca);    
        }
        
        public function procuraNomeParcial($nome){
            $this->conectar();
            $busca = "SELECT * FROM pessoa WHERE nome like '%$nome%'";
            return mysql_query($busca);    
        }        
        
        public function procuraNomeExata($nome){
            $this->conectar();
            $busca = "SELECT * FROM pessoa WHERE nome = '$nome'";
            return mysql_query($busca);    
        }        
        
        /**Procura por tipo de pessoa**/
        public function procuraTipo($tipo){
            $this->conectar();
            $busca = "SELECT p.codigo, p.nome FROM pessoa p, tipopessoa tp WHERE tp.nome = '$tipo' and p.codtipopessoa = tp.codigo";
            return mysql_query($busca);    
        }            
        
        public function validaLogin($login, $senha){
            $this->conectar();
            $busca = "SELECT * FROM pessoa WHERE login = '$login' and senha = '$senha'";
            return mysql_query($busca);    
        }          
        
    }
?>

