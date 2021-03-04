/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    function insereCookie(nome, valor){
        if (navigator.cookieEnabled==1){

                    var hoje        = new Date();
                    var expira      = new Date(hoje.getTime()+999*24*60*60*1000);
                    expira          = expira.toGMTString();
                    document.cookie = nome + "=" + valor + ";expires=" + expira;
        }
        else {
            alert("O navegador nao esta com os cookies habilitados, por favor habilite");
        }    
    }

    
    function pegaCookie(nome){
        var cookies = document.cookie;
        var inicio  = cookies.indexOf(nome);
        
        if(inicio == -1)return null;
        var fim = cookies.indexOf(";", inicio);
        
        if(fim == -1)fim = cookies.length;
        return unescape(cookies.substring(inicio, fim));
    }
    
    function apagaCookie(name){
        document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    }    
    
    function escreveLogin(){
        var login = (pegaCookie("login"));
        login     = login.replace("login=", "");
        document.write(login);        
    }
    
    function visitantes(){
        var visitas = pegaCookie("visita");
        if(visitas == "NaN" || visitas == null || visitas == ""){
            visitas = 0;
        }else{
            visitas = visitas.replace("visita=","");
        }

        var qtd     = 0;
        if(visitas != null && visitas != ""){
            qtd = parseInt(visitas) + 1;
        }else{
            if(visitas == null || visitas == ""){
                qtd = 1;
            }
        }
        insereCookie("visita", qtd);
        document.write("Visitas no site:" + qtd);
    }