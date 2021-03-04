<?php
        try{    
           include_once("../../class/fpdf/fpdf.php");
           ini_set('allow_url_fopen ','ON');
           include_once("../../class/PHPJasperXML.inc");
           include_once ("../../setting.php");

            $relatorio = "RelatorioPessoa.jrxml";
            if(file_exists($relatorio)){
                $xml = simplexml_load_file($relatorio); //informe onde está seu arquivo jrxml
                if($xml != NULL && $xml != ""){
                     $PHPJasperXML                 = new PHPJasperXML();
                     $PHPJasperXML->debugsql       = false;
                     $PHPJasperXML->arrayParameter = array("titulo"=>"Relatório de Pessoas cadastradas"); //passa o parâmetro cadastrado no iReport
                     $PHPJasperXML->xml_dismantle($xml);
                     if($server != NULL && $server != "" && $user != NULL && $user != "" && 
                        $pass != NULL && $pass != "" && $db != NULL && $db != ""){
                          $PHPJasperXML->connect($server,$user,$pass,$db);
                          $PHPJasperXML->transferDBtoArray($server,$user,$pass,$db);
                          $PHPJasperXML->outpage("I");
                     }else{
                          echo("Algum parametro para conexão com o banco de dados está nulo");
                     }
                }else{
                     echo("XML impresso: $xml");
                }
            }else{
                echo("O sistema não encontrado o arquivo de relatório: $relatorio");
            }
        }catch(Exception $ex){
            echo("Erro causado por:<br>$ex");
        }
?> 