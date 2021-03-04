/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function hoje(){
        var obj = new Date();
        document.write("Hoje é:" + obj.getDate() + "/"+ obj.getMonth() + "/" + obj.getFullYear());    
} 
	
function HoraAtual(){
        var obj             = new Date();
   	var hora            = obj.getHours(); 
   	var minuto          = obj.getMinutes(); 
   	var segundo         = obj.getSeconds(); 
   	var str_segundo     = new String (segundo); 
        
        if(hora !== null && hora !== "" && minuto !== null && minuto !== "" && segundo !== null && segundo !== ""){
            if (str_segundo.length === 1){ 
             segundo = "0" + segundo; 
            }
            
            str_minuto = new String (minuto); 
            if (str_minuto.length === 1){ 
                minuto = "0" + minuto; 
            }

            var str_hora = new String (hora); 
            if (str_hora.length === 1){ 
                hora = "0" + hora; 
            }

            var horaImprimivel = hora + " : " + minuto + " : " + segundo;
            if(horaImprimivel !== null && horaImprimivel !== ""){
                document.getElementById("phora").innerHTML  = horaImprimivel + " - Hora do site"; 
            }

            setTimeout("HoraAtual()",1000); 
        }
}	