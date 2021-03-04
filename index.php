<html>
    <head>
        <?php include("visao/includes/header.php") ?>
        <link rel="stylesheet" href="<?=$site?>/visao/recursos/css/default/menuLateral.css">
        <script language="JavaScript" type="text/javascript" src="<?=$site?>/visao/recursos/javascript/menuLateral.js"></script>
        <link rel="stylesheet" href="visao/recursos/css/default/inicio.css" />
        <script language="JavaScript" type="text/javascript" src="<?=$site?>/visao/recursos/javascript/validaLogin.js"></script>
        <meta name="description" content="Auto gerenciatarefa de sites que tem um layout 
        simplificado para que qualquer um que tenha conhecimentos básicos em 
        informática venha a usá-lo">
        <meta name="keywords" content="auto gerenciatarefa, gerenciatarefa de sites, 
        gerenciatarefa dinâmico, sites gerador, gerador, sites, site fácil, fácil, 
        facilidade para site, tenha seu site rápido">
        <title>Página inicial</title>
    </head>
    <body onload="HoraAtual();">
        <div id="conteudo">
            <h2 class="tituloSite">GERENCIA TAREFAS</h2>          
            <?include("visao/includes/menuLateralPrincipal.php")?>
            <noscript>Javascript desativado por favor ativeo novamente para funcionamento normal do site</noscript>
            <?include("visao/includes/login.php")?>
        </div>
        <?include("visao/includes/footer.php")?>
    </body>
</html>
