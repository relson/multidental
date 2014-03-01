<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Crianção de uma Agenda Dinâmica em PHP e MySQL + Jquery | Código Aberto. Desenvolvimento Multiplataforma</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
        <link type="text/css" rel="stylesheet" href="../../js/plugins/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
        <script type="text/javascript" src="agenda.js"></script>
        <script type="text/javascript" src="../../js/lib/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="../../js/plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
        <script type="text/javascript" src="../../js/plugins/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script type="text/javascript">
            $(document).ready(function() {        
                $("#agendamento").fancybox({
                    maxWidth: 800,
                    maxHeight: 600,
                    fitToView: false,
                    width: '600px',
                    height: '480px',
                    autoSize: false,
                    closeClick: false,
                    openEffect: 'fade',
                    closeEffect: 'fade'
                });
            });
        </script>
    </head>

    <body>
        <?php
        require_once '../../config/imports.php';
        $meses = array(
            'Janeiro' => 1,
            'Fevereiro' => 2,
            'Março' => 3,
            'Abril' => 4,
            'Maio' => 5,
            'Junho' => 6,
            'Julho' => 7,
            'Agosto' => 8,
            'Setembro' => 9,
            'Outubro' => 10,
            'Novembro' => 11,
            'Dezembro' => 12,
        );

        $mesesNome = array(
            1 => 'Janeiro',
            2 => 'Fevereiro',
            3 => 'Março',
            4 => 'Abril',
            5 => 'Maio',
            6 => 'Junho',
            7 => 'Julho',
            8 => 'Agosto',
            9 => 'Setembro',
            10 => 'Outubro',
            11 => 'Novembro',
            12 => 'Dezembro',
        );

        if (isset($_GET['dia']) or isset($_GET['mes']) or isset($_GET['ano'])) {

            if (isset($_GET['dia'])) {
                $dia = (int) $_GET['dia'];
            } else {
                $dia = (int) date("d");
            }

            if (isset($_GET['mes'])) {
                $mes = (int) $_GET['mes'];
            } else {
                $mes = (int) date("m");
            }

            if (isset($_GET['ano'])) {
                $ano = (int) $_GET['ano'];
            } else {
                $ano = (int) date("Y");
            }
        } else {
            $ano = date("Y");
            $dia = (int) date("d");
            $mes = (int) date("m");
        }
        $cont = 0;
        $dias = array();

        $totalDias = date("t", mktime(0, 0, 0, $mes, '01', $ano));
        $primeiroDia = date("D", mktime(0, 0, 0, $mes, 1, $ano));

        for ($d = 0; $d < $totalDias; $d++)
            $dias[$d] = array_push($dias, $d + 1);
        switch ($primeiroDia) {
            case "Sun":
                $pos = 0;
                break;

            case "Mon":
                $pos = 1;
                break;

            case "Tue":
                $pos = 2;
                break;

            case "Wed":
                $pos = 3;
                break;

            case "Thu":
                $pos = 4;
                break;

            case "Fri":
                $pos = 5;
                break;

            case "Sat":
                $pos = 6;
                break;
        }

        $mesanterior = 1;
        $anoapresentado = $ano;

        $mesproximo = 1;
        $anoapresentadoproximo = $ano;

        if ($mes == 1) {
            $mesanterior = 12;
            $anoapresentado = $ano - 1;
        } else {
            $mesanterior = $mes - 1;
        }

        if ($mes == 12) {
            $mesproximo = 1;
            $anoapresentadoproximo = $ano + 1;
        } else {
            $mesproximo = $mes + 1;
        }
        ?>
        <table cellpading="0" cellspacing="0" border="0" class="tabelamesagenda" style="width:100%;">	
            <thead>
                <tr>
                    <td class="btn-controlemes" onclick="<?php echo "agendamudames($mesanterior,$anoapresentado)" ?>">
                        « Mês Anterior
                    </td>
                    <td colspan="5">
                        <?php echo "$mesesNome[$mes] de $ano" ?>
                    </td>
                    <td class="btn-controlemes" onclick="<?php echo "agendamudames($mesproximo,$anoapresentadoproximo)" ?>">
                        Próximo mês »
                    </td>
                </tr>
                <tr>
                    <td>Domingo</td><td>Segunda</td><td>Terça</td><td>Quarta</td><td>Quinta</td><td>Sexta</td><td>Sábado</td>
                </tr>
            </thead>

            <tbody>
                <?php
                for ($linha = 0; $linha < 6; $linha++) {
                    echo "</tr>";
                    for ($coluna = 0; $coluna < 7; $coluna++) {
                        $pos2 = $cont - $pos;

                        if (empty($dias[$pos2])) {
                            echo '<td class="semconteudo"></td>';
                        } else {
                            $data = $dias[$pos2] . '/' . $mes . '/' . $ano;
                            $agendamento = new AgendamentoDAO();
                            $dados = $agendamento->selectInnerData($data);
                            
                            for ($i = 0; $i < count($dados); $i++) {
                                if ($dados[$i]['minuto'] == 0) {
                                    $dados[$i]['minuto'] .= '0';
                                }
                            }

                            if ($dias[$pos2] == $dia) {
                                echo "<td class='selected' onClick='agendadia($dias[$pos2],$mes,$ano)'>";
                                echo "$dias[$pos2]";

                                if (!empty($dados)) {
                                    for ($i = 0, $count = count($dados); $i < $count; $i++) {
                                        $agendamento = $dados[$i]['idAgendamento'];
                                        echo "<span class='numerotexto'><a href='../../Agendamento.php?edag=$agendamento' data-fancybox-type='iframe'>" . $dados[$i]['hora'].':'.$dados[$i]['minuto'] . ' ' . $dados[$i]['nome'] . "</a></span>";
                                    }
                                } else {
                                    echo "<span class='numerotexto'></span>";
                                }
                                echo "</td>";
                            } else {
                                echo "<td onClick='agendadia($dias[$pos2],$mes,$ano)'>";
                                echo "$dias[$pos2]";

                                if (!empty($dados)) {
                                    for ($i = 0, $count = count($dados); $i < $count; $i++) {
                                        $agendamento = $dados[$i]['idAgendamento'];
                                        echo "<span class='numerotexto'><a href='../../Agendamento.php?edag=$agendamento' data-fancybox-type='iframe' >" . $dados[$i]['hora'].':'.$dados[$i]['minuto'] . ' ' . $dados[$i]['nome'] . "</a></span>";
                                    }
                                } else {
                                    echo "<span class='numerotexto'></span>";
                                }
                                echo "</td>";
                            }
                        }
                        $cont++;
                    }
                    echo '</tr>';
                }
                ?> 
            </tbody>
        </table>
    </body>
</html>