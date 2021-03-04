<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("../includes/header.php")?>
        <?include("../includes/scriptsUsuario.php")?>
        <title>Gerencia Campos do formulário</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
            
            <h4>Gerencia Campos do formulário</h4>
            
            <?include_once ("../includes/menuSuperiorAdmin.php")?>
            <?
                if($_COOKIE["login"] == NULL || $_COOKIE["login"] == ""){
                    echo("<script>location.href='/gerenciatarefa'</script>");
                }
            ?>
            
            <?
                $codigo    = $_REQUEST["codigo"];
                if(($codigo != NULL && $codigo != "")){
                    include_once  "../../controle/formulario/detalhesFormulario.php";
                }else{
                     $dados = NULL;
                }
            ?>
            
            <form action="../../controle/formulario/gerenciaCampoFormulario.php" name="fgerenciaFormulario" method="post">
                <fieldset>
                    <input type="hidden" name="codigo" value="<?=$dados[codigo]?>"/>
                    <p>
                         <label>Formulário:</label>
                         <select name="codformulario">
                              <option value=""></option>
                         </select>
                    </p>
                    
                    <p>
                        <label>Nome:</label>
                        <input type="text" name="nome" value="<?=$dados[nome]?>" size="50" maxlength="50" required/>
                    </p>

                    <p>
                        <label>Tipo(Input):</label>
                        <input type="text" name="tipo" maxlength="50" size="50" value="<?=$dados[tipo]?>" required>
                    </p>
                    
                    <p>
                        <label>Componente:</label>
                        <input type="text" name="componente" size="50" maxlength="50" value="<?=$dados[componente]?>" required/>
                    </p>  

                    <p>
                        <label>Requerido:</label>
                        <select name="requerido">
                             <option>SIM</option>
                             <option>NAO</option>
                        </select>
                    </p>                     
                  
                    <p>
                        <input type="submit" name="submit" value="Inserir"/>
                        <?if($codigo != NULL && $codigo != ""){?>
                            <input type="submit" name="submit" value="Atualizar"/>
                            <input type="submit" name="submit" value="Excluir"/>
                        <?}else{?>
                            <input type="reset" name="Limpar" value="Limpar" title="Limpar campos"/> 
                        <?}?>
                    </p>
                </fieldset>
            </form>
        </div>
        <?include("../includes/footer.php")?>
    </body>
</html>
