<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("includes/header.php")?>
        <title>Funcionalidades disponíveis:</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
            <h4>Funcionalidades disponíveis:</h4>
            <?include("includes/menuSuperiorAdmin.php")?>
            <?
                if($_COOKIE["login"] == NULL || $_COOKIE["login"] == ""){
                    echo("<script>location.href='/gerenciatarefa'</script>");
                }
            ?>
            
           <p>
                Neste site você poderá navegar pelo menu superior e encontrar acesso aos seguintes módulos:
               <ul>
                    <li><a href="/gerenciatarefa/visao/pessoa/">Pessoas</a></li>
                    <li><a href="/gerenciatarefa/visao/empresa/">Empresas</a></li>
                    <li>Funcionários</li>
                    <li><a href="/gerenciatarefa/visao/relatorios/">Relatórios</a></li>
                    <li><a href="/gerenciatarefa/visao/contas/">Contas</a></li>
                    <li><a href="/gerenciatarefa/visao/ajuda/">Suporte</a></li>
               </ul>
           </p> 
        </div>
         
        </div>
        <?include("includes/footer.php")?>
    </body>
</html>
