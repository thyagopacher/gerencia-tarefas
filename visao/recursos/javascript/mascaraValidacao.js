/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
    var key         = '';  
    var i           = j = 0;  
    var len         = len2 = 0;  
    var strCheck    = '0123456789';  
    var aux         = aux2 = '';  
    var whichCode   = (window.Event) ? e.which : e.keyCode;  
    if (whichCode == 13) return true;  
    key = String.fromCharCode(whichCode); // Valor para o código da Chave  
    if (strCheck.indexOf(key) == -1) return false; // Chave inválida  
        len = objTextBox.value.length;  
    for(i = 0; i < len; i++)  
        if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;  
    aux = '';  
    for(; i < len; i++)  
        if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);  
    aux += key;  
    len = aux.length;  
    if (len == 0) objTextBox.value = '';  
    if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;  
    if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;  
    if (len > 2) {  
        aux2 = '';  
        for (j = 0, i = len - 3; i >= 0; i--) {  
            if (j == 3) {  
                aux2 += SeparadorMilesimo;  
                j = 0;  
            }  
            aux2 += aux.charAt(i);  
            j++;  
        }  
        objTextBox.value = '';  
        len2 = aux2.length;  
        for (i = len2 - 1; i >= 0; i--)  
        objTextBox.value += aux2.charAt(i);  
        objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);  
    }  
    return false; 
}

//mascara para cnpj
function MascaraCNPJ(cnpj, event){
    if(mascaraInteiro(cnpj) == false){
        event.returnValue = false;
    }
    return formataCampo(cnpj,'00.000.000/0000-00',event);
}
//mascara para cep
function MascaraCep(cep, event){
    if(mascaraInteiro(cep, event) == false){
        event.returnValue = false;
    }
    return formataCampo(cep, '00.000-000',event);
}
//mascara para data
function MascaraData(data, event){
    if(mascaraInteiro(data) == false){
        event.returnValue = false;
    }
    return formataCampo(data, '00/00/0000', event);
}
//mascara para telefone
function MascaraTelefone(tel, event){
    if(mascaraInteiro(tel) == false){
        event.returnValue = false;
    }
    return formataCampo(tel, '(00) 0000-0000', event);
}
function MascaraCPF(cpf, event){
    if(mascaraInteiro(cpf) == false){
        event.returnValue = false;
    }
    return formataCampo(cpf, '000.000.000-00', event);
}
function mascaraInteiro(event){
    if(event.keyCode < 48 || event.keyCode > 57){
        event.returnValue = false;
    }
    return true;
}
function formataCampo(campo, Mascara, evento){
    var boleanoMascara;
    var Digitado       = evento.KeyCode;
    exp                = /\-|\.|\/|\(|\)| /g;
    campoSoNumeros     = campo.value.toString().replace(exp, "");
    var posicaoCampo   = 0;
    var NovoValorCampo = "";
    var TamanhoMascara = campoSoNumeros.length;
    if(Digitado != 8){//backspace
        for(i = 0; i <= TamanhoMascara; i++){
            boleanoMascara = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == "."))
            || (Mascara.charAt(i) == "/");
            boleanoMascara = boleanoMascara || ((Mascara.charAt(i) == "(") || (Mascara.charAt(i) == ")"))
            || (Mascara.charAt(i) == " ");
            if(boleanoMascara){
                NovoValorCampo += Mascara.charAt(i);
                TamanhoMascara++;
            }else{
                NovoValorCampo += campoSoNumeros.charAt(posicaoCampo);
                posicaoCampo++;
            }
        }
        campo.value = NovoValorCampo;
        return true;
    }else{
        return true;
    }
}
function ValidaTelefone(tel){
    exp = /\(\d{2}\)\ \d{4}\-\d{4}/
    if(!exp.test(tel.value))
            alert('Numero de Telefone Invalido!');
}
//valida CEP
function ValidaCep(cep){
        exp = /\d{2}\.\d{3}\-\d{3}/
        if(!exp.test(cep.value))
                alert('Numero de Cep Invalido!');               
}

function ValidaData(datap){
    exp = /\d{2}\/\d{2}\/\d{4}/
    if(!exp.test(datap.value)){
        alert("Data invalida!");
    }
}

function ValidaEmail(email){
	var campo_email = email.value;
	//Checando se o endereço e-mail não esta vazio
	if(campo_email=="") {
		alert("É necessário o preenchimento deste campo.");
		document.id_form.campo_email.focus();
		return false;
	}else{
            return true;
        }
	//Checando se o endereço de e-mail é válido
	if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value))) {
		alert("É necessário o preenchimento de um endereço de e-mail válido.");
		email.focus();
		return false;
	}else{
            return true;
        }
}

//valida o CNPJ digitado
function ValidarCNPJ(ObjCnpj){
        var cnpj = ObjCnpj.value;
        var valida = new Array(6,5,4,3,2,9,8,7,6,5,4,3,2);
        var dig1= new Number;
        var dig2= new Number;
        exp = /\.|\-|\//g;
        cnpj = cnpj.toString().replace( exp, "" ); 
        var digito = new Number(eval(cnpj.charAt(12)+cnpj.charAt(13)));
        for(i = 0; i<valida.length; i++){
                dig1 += (i>0? (cnpj.charAt(i-1)*valida[i]):0);  
                dig2 += cnpj.charAt(i)*valida[i];       
        }
        dig1 = (((dig1%11)<2)? 0:(11-(dig1%11)));
        dig2 = (((dig2%11)<2)? 0:(11-(dig2%11)));
        if(((dig1*10)+dig2) != digito)  
                alert('CNPJ Invalido!');
}	

