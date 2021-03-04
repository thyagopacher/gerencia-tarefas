/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


    function meuPerfil(){
        var login = (pegaCookie("login")).replace("login=", "");
        var senha = (pegaCookie("senha")).replace("senha=", "");                    
        var link  = "<a href='/gerenciatarefa/visao/pessoa/gerenciaUsuario.php?login=" + login + "&senha=" + senha + "'>Meu perfil</a>"; 
        document.write(link);
    }
    
    function sairSistema(){
        apagaCookie("login");
        if(pegaCookie("login") != ""){
            alert("Não apagou cookie 1 de login:" + pegaCookie("login"));
        }else{
            apagaCookie("senha");
            if(pegaCookie("senha") != ""){
                alert("Não apagou cookie 2 de senha:" + pegaCookie("senha"));
            }        
            window.location = "/gerenciatarefa/visao/logout.php";
        }
    }