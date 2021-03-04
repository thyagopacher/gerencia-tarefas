<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
            <?
                if($_COOKIE["login"] == NULL || $_COOKIE["login"] == ""){
                    echo("<script>location.href='/gerenciatarefa'</script>");
                }
            ?>
            
            <?
                $codigo    = $_REQUEST["codigo"];
                if(($codigo != NULL && $codigo != "")){
                    include_once  "../../controle/formulario/detalhesFormulario.php";
                    include_once  "../../controle/formulario/procuraCamposFormulario.php";
                }else{
                     $dados = NULL;
                }
            ?>

<html>
    <head>
        <?include("../includes/header.php")?>
        <title>Formulário: <?=$dados[nome]?></title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
            
            <?include_once ("../includes/menuSuperiorAdmin.php")?>

             <h4>Formulário: <?=$dados[nome]?></h4>
             
            <form action="<?=$dados[acao]?>" name="<?=$dados[nome]?>" method="<?=$dados[metodo]?>">
                <fieldset>
                   
                    <?
                    if(mysql_num_rows($resultado_campos) > 0){
                         while($dadosc = mysql_fetch_array($resultado_campos)){
                              if($dadosc[componente] == "input"){
                                   echo("<input type='$dadosc[tipo]' name='$dadosc[nome]'/>");
                              }
                              if($dadosc[componente] == "textarea"){
                                   echo("<textarea name='$dadosc[nome]'></textarea>");
                              }                              
                         }
                    }else{
                         echo("Cadastre algum campo no formulário antes");
                    }
                    ?> 
                  
                    <p>
                        <input type="submit" name="submit" value="Inserir"/>
                        <input type="submit" name="submit" value="Atualizar"/>
                        <input type="submit" name="submit" value="Excluir"/>
                    </p>
                </fieldset>
            </form>
        </div>
        <?include("../includes/footer.php")?>
    </body>
</html>
