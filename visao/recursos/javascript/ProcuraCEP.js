/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

	// Função única que fará a transação
	function getEndereco() {
			// Se o campo CEP não estiver vazio
			if($.trim($("#fcep").val()) != ""){
				/* 
					Para conectar no serviço e executar o json, precisamos usar a função
					getScript do jQuery, o getScript e o dataType:"jsonp" conseguem fazer o cross-domain, os outros
					dataTypes não possibilitam esta interação entre domínios diferentes
					Estou chamando a url do serviço passando o parâmetro "formato=javascript" e o CEP digitado no formulário
					http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#cep").val()
				*/
				$.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#fcep").val(), function(){
					// o getScript dá um eval no script, então é só ler!
					//Se o resultado for igual a 1
			  		if(resultadoCEP["resultado"]){
						// troca o valor dos elementos
                                                $("#ftipologradouro").val(unescape(resultadoCEP["tipo_logradouro"]));
						$("#flogradouro").val(unescape(resultadoCEP["logradouro"]));
						$("#fbairro").val(unescape(resultadoCEP["bairro"]));
						$("#fcidade").val(unescape(resultadoCEP["cidade"]));
						$("#festado").val(unescape(resultadoCEP["uf"]));
						$("#registro1").submit();
					}else{
						alert("Endereço não encontrado");
					}
				});				
			}			
	}