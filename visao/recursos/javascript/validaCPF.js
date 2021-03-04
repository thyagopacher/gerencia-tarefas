/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//valida o CPF digitado com mascara
function valida_cpf(cpf){
  erro = new String;   
  
    if (cpf.value.length == 11)   
    {     
            cpf.value = cpf.value.replace('.', '');   
            cpf.value = cpf.value.replace('.', '');   
            cpf.value = cpf.value.replace('-', '');   
  
            var nonNumbers = /\D/;   
       
            if (nonNumbers.test(cpf.value))   
            {   
                    erro = "A verificacao de CPF suporta apenas números!";   
            }   
            else   
            {   
                    if (cpf.value == "00000000000" ||   
                            cpf.value == "11111111111" ||   
                            cpf.value == "22222222222" ||   
                            cpf.value == "33333333333" ||   
                            cpf.value == "44444444444" ||   
                            cpf.value == "55555555555" ||   
                            cpf.value == "66666666666" ||   
                            cpf.value == "77777777777" ||   
                            cpf.value == "88888888888" ||   
                            cpf.value == "99999999999") {   
                               
                            erro = "Número de CPF inválido";     
                    }   
       
                    var a = [];   
                    var b = new Number;   
                    var c = 11;   
  
                    for (i=0; i<11; i++){   
                            a[i] = cpf.value.charAt(i);   
                            if (i < 9) b += (a[i] * --c);   
                    }   
       
                    if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }   
                    b = 0;   
                    c = 11;   
       
                    for (y=0; y<10; y++) b += (a[y] * c--);   
       
                    if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11-x; }   
       
                    if ((cpf.value.charAt(9) != a[9]) || (cpf.value.charAt(10) != a[10])) {   
                        erro = "Número de CPF inválido";   
                    }   
            }   
    }   
    else   
    {   
        if(cpf.value.length == 0)   
            return false   
        else   
            erro = "Número de CPF inválido";     
    }   
    if (erro.length > 0) {   
            alert(erro);   
            cpf.focus();   
            return false;   
    }     
    return true;
}
