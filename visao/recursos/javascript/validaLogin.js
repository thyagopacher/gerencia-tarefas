/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    $(document).ready(function(){
            var login  = pegaCookie("login");
            var senha  = pegaCookie("senha");
            if((login == null || login == "") || (senha == null || senha == "") && (logout == null || logout == "")){
                $("#submitLogin").click(function(){ 
                       var login = $("#flogin").val();
                       var senha = $("#fsenha").val();
                       $.ajax({  
                                  url: "controle/pessoa/gerenciaLogin.php", 
                                  dataType: 'html',
                                  data: {login:login, senha: senha},
                                  type: "POST", 

                                   beforeSend: function ()   { 
                                       $('#carregando').show();
                                   },
                                   success: function(data){
                                       data = data.replace("\n", "");
                                       $('#carregando').hide();
                                                if(data == "yes"){
                                                     insereCookie("login", login);
                                                     insereCookie("senha", senha);
                                                     window.location ='visao/pessoa/principal.php'
                                                }else{
                                                    alert("Login ou senha inválidos");
                                                }    
                                   },
                                   error: function(data){
                                            $('#carregando').html(data);
                                   }
                       });
                });
            }else{
                window.location ='visao/pessoa/principal.php'
            }
    });
    
    function insereCookie(nome, valor){
        if (navigator.cookieEnabled==1){

                    var hoje   = new Date();
                    var expira = new Date(hoje.getTime()+999*24*60*60*1000);
                    expira     = expira.toGMTString();
                    document.cookie = nome+"="+valor+";expires="+expira;
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