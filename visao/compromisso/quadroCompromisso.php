<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <?include("../includes/header.php")?>
        <link rel='stylesheet' type='text/css' href='<?=$site?>/visao/recursos/css/default/fullcalendar.css' />
        <link rel='stylesheet' type='text/css' href='<?=$site?>/visao/recursos/css/default/fullcalendar.print.css' media='print' />
        <script type='text/javascript' src='<?=$site?>/visao/recursos/javascript/jquery-1.8.1.min.js'></script>
        <script type='text/javascript' src='<?=$site?>/visao/recursos/javascript/jquery-ui-1.8.23.custom.min.js'></script>
        <script type='text/javascript' src='<?=$site?>/visao/recursos/javascript/fullcalendar.min.js'></script>
        <script type='text/javascript'>
                $(document).ready(function() {
                        var date = new Date();
                        var d = date.getDate();
                        var m = date.getMonth();
                        var y = date.getFullYear();
                        $('#calendar').fullCalendar({
                                editable: true,
                                events: [
                                        {
                                                title: 'All Day Event',
                                                start: new Date(y, 0, 1)
                                        },
                                        {
                                                title: 'Long Event',
                                                start: new Date(y, m, d-5),
                                                end: new Date(y, m, d-2)
                                        },
                                        {
                                                id: 999,
                                                title: 'Repeating Event',
                                                start: new Date(y, m, d-3, 16, 0),
                                                allDay: false
                                        },
                                        {
                                                id: 999,
                                                title: 'Repeating Event',
                                                start: new Date(y, m, d+4, 16, 0),
                                                allDay: false
                                        },
                                        {
                                                title: 'Meeting',
                                                start: new Date(y, m, d, 10, 30),
                                                allDay: false
                                        },
                                        {
                                                title: 'Lunch',
                                                start: new Date(y, m, d, 12, 0),
                                                end: new Date(y, m, d, 14, 0),
                                                allDay: false
                                        },
                                        {
                                                title: 'Birthday Party',
                                                start: new Date(y, m, d+1, 19, 0),
                                                end: new Date(y, m, d+1, 22, 30),
                                                allDay: false
                                        },
                                        {
                                                title: 'Click for Google',
                                                start: new Date(y, m, 28),
                                                end: new Date(y, m, 29),
                                                url: 'http://google.com/'
                                        }
                                ]
                        });

                });
                
        </script>        
        <title>Quadro de compromissos</title>
    </head>
    <body>
        <div id="conteudo">
            <h2>Quadro de compromissos</h2>
            <?include("../includes/menuSuperiorAdmin.php")?>
            <?
                if($_COOKIE["login"] == NULL || $_COOKIE["login"] == ""){
                    echo("<script>location.href='/gerenciatarefa'</script>");
                }
            ?>
            
            <div id='calendar'></div>
        </div>
    </body>
</html>
