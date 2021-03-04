<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    include("../../modelo/tipopessoa/modeloTipoPessoa.php");
    
    $submited = $_REQUEST["submited"];
    if($submited != NULL && $submited == "true"){
        $nome       = $_REQUEST["nome"];
        $submit     = $_REQUEST["submit"];
        $resultado  = NULL;
        $mp         = new ModeloTipoPessoa();
        
        if($submit != NULL){
            if($submit == "Procura exata"){
                $resultado = $mp->procuraNomeExata($nome);
            }elseif($submit == "Procura parcial"){
                $resultado = $mp->procuraNomeParcial($nome);
            }
            if($resultado != NULL && mysql_num_rows($resultado) > 0){
                 while ($dados = mysql_fetch_array($resultado)) {
                      echo("<a href='../../visao/tipopessoa/gerenciaTipoPessoa.php?codigo=$dados[codigo]' title='Detalhes de $dados[nome]'>
                      $dados[codigo]  -   $dados[nome] </a><br>");  
                }
            }else{
                echo("Nada encontrado");
            } 
        }
    }
?>
