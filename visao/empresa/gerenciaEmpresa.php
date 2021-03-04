<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("../includes/header.php")?>
        <script language="JavaScript" type="text/javascript" src="<?=$site?>/visao/recursos/javascript/mascaraValidacao.js"></script>
        <title>Gerencia Usuário</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
            
            <h4>Gerencia Empresa</h4>
            
            <?include("../includes/menuSuperiorAdmin.php")?>
            <?
                if($_COOKIE["login"] == NULL || $_COOKIE["login"] == ""){
                    echo("<script>location.href='/gerenciatarefa'</script>");
                }
            ?>
            
            <?
                $codigo    = $_REQUEST["codigo"];
                $login     = $_GET["login"];
                $senha     = $_GET["senha"];
                if(($codigo != NULL && $codigo != "") || (($login != NULL && $login != "")  && ($senha != NULL && $senha != ""))){
                    require_once "../../controle/empresa/detalhesEmpresa.php";
                }else{
                     $dados = NULL;
                }
            ?>
            
            <form action="../../controle/pessoa/gerenciaEmpresa.php" name="fgerenciaUsuario" method="post">
                <fieldset>
                    <input type="hidden" name="codigo" value="<?=$dados[codigo]?>"/>
                    <p>
                        <label>Nome:</label>
                        <input type="text" name="nome" value="<?=$dados[nome]?>" size="50" maxlength="50" required/>
                    </p>

                    <p>
                        <label>Telefone:</label>
                        <input type="text" name="telefone" size="14" maxlength="14" value="<?=$dados[telefone]?>" onkeypress="MascaraTelefone(this,event);" onblur="ValidaTelefone(this);" placeholder="(00)0000-0000"/>
                    </p>                      
                    
                    <p>
                        <label>CNPJ:</label>
                        <input type="text" name="cnpj" size="18" maxlength="18" value="<?=$dados[cnpj]?>" onkeypress="MascaraCNPJ(this, event);"/>
                    </p>  
                  
                    <p>
                        <label>CEP:</label>
                        <input type="text" name="cep" id="fcep" size="10" maxlength="10" 
                        value="<?=$dados[cep]?>" onchange="getEndereco();" onblur="ValidaCep(this);" 
                        onkeypress="MascaraCep(this, event);" placeholder="00000-000"
                        title="Ao digitar um cep válido e ir para outro campo, voltará os dados do endereço"/>
                        <p>
                            <a href="http://www.buscacep.correios.com.br/servicos/dnec/index.do" class="botao" title="Redireciona para pesquisa no site dos correios">Busca CEP</a> 
                        </p>
                    </p>                     

                    <p>
                        <label>Tipo Logradouro:</label>
                        <input type="text" name="tipologradouro" id="ftipologradouro" size="50" maxlength="50" value="<?=$dados[tipologradouro]?>"/>
                    </p>                     
                    
                    <p>
                        <label>Logradouro:</label>
                        <input type="text" name="logradouro" id="flogradouro" size="50" maxlength="50" value="<?=$dados[logradouro]?>"/>
                    </p>   
                    
                    <p>
                        <label>Bairro:</label>
                        <input type="text" name="bairro" id="fbairro" size="50" maxlength="50" value="<?=$dados[bairro]?>"/>
                    </p>                      
                    
                    <p>
                        <label>Cidade:</label>
                        <input type="text" name="cidade" id="fcidade" size="50" maxlength="50" value="<?=$dados[cidade]?>"/>
                    </p>                      
                    
                    <p>
                        <label>Estado:</label>
                        <input type="text" name="estado" id="festado" size="3" maxlength="3" value="<?=$dados[estado]?>" title="Digite a sigla, ex: (PR, SC, RJ)"/>
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
