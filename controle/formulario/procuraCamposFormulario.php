<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once ("../../modelo/formulario/modeloCampoFormulario.php");

$mp         = new ModeloCampoFormulario();
if($codigo != NULL && $codigo != ""){
     $resultado_campos  = $mp->procuraFormulario($codigo);
}else{
     echo("<script>alert('Precisa do código do formulário');</script>");
}
  
?>
