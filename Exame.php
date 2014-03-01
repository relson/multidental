<?php

include('./config/imports.php');
include('./config/sm.php');

$sm->assign("usuario", 'Talita Lima');

$paciente = new PacienteDAO();
$exame = new Exame();
$exameDAO = new ExameDAO();

if (isset($_POST['acao'])) {
    $acao = $_POST['acao'];

    switch ($acao) {
        case 'salvar':
            //verifica se os campos do formulario estam setados
            if (isset($_POST['pressao']) and isset($_POST['freqCardiaca']) and isset($_POST['padraoEsqueletico']) and isset($_POST['perfilFacial'])) {

                //verifiva se os campos obrigatórios estão devidamente preenchidos / validação
                if ($_POST['pressao'] != '' and $_POST['freqCardiaca'] != '' and $_POST['padraoEsqueletico'] != '' and $_POST['perfilFacial'] != '') {

                    $exame->setIdPaciente($_POST['paciente']);
                    $exame->setDataExame();
                    $exame->setPressaoArterial($_POST['pressao']);
                    $exame->setFreqCardiaca($_POST['freqCardiaca']);
                    //$exame->setFreqRespiratoria($_POST['freqRespiratoria']);
                    $exame->setPadraoEsqueletico($_POST['padraoEsqueletico']);
                    $exame->setPerfilFacial($_POST['perfilFacial']);
                    $exame->setExtraBucal($_POST['extraBucal']);
                    $exame->setLocalizacao($_POST['localizacao']);
                    $exame->setForma($_POST['forma']);
                    $exame->setTamanho($_POST['tamanho']);
                    $exame->setCor($_POST['cor']);
                    $exame->setSuperficie($_POST['superficie']);
                    $exame->setConsistencia($_POST['consistencia']);
                    $exame->setInsercao($_POST['insercao']);
                    $exame->setSinaisSecundarios($_POST['sinaisSecundarios']);

                    $exameDAO->insert($exame);

                    header('Location: Exame.php?exa=' . $_POST['paciente']);
                }
            }
            break;
        case 'atualizar':
            //verifica se os campos do formulario estam setados
            if (isset($_POST['pressao']) and isset($_POST['freqCardiaca']) and isset($_POST['padraoEsqueletico']) and isset($_POST['perfilFacial'])) {

                //verifiva se os campos obrigatórios estão devidamente preenchidos / validação
                if ($_POST['pressao'] != '' and $_POST['freqCardiaca'] != '' and $_POST['padraoEsqueletico'] != '' and $_POST['perfilFacial'] != '') {
                    $idExame = $_POST['exame'];
                    $exame->setIdPaciente($_POST['paciente']);
                    $exame->setPressaoArterial($_POST['pressao']);
                    $exame->setFreqCardiaca($_POST['freqCardiaca']);
                    //$exame->setFreqRespiratoria($_POST['freqRespiratoria']);
                    $exame->setPadraoEsqueletico($_POST['padraoEsqueletico']);
                    $exame->setPerfilFacial($_POST['perfilFacial']);
                    $exame->setExtraBucal($_POST['extraBucal']);
                    $exame->setLocalizacao($_POST['localizacao']);
                    $exame->setForma($_POST['forma']);
                    $exame->setTamanho($_POST['tamanho']);
                    $exame->setCor($_POST['cor']);
                    $exame->setSuperficie($_POST['superficie']);
                    $exame->setConsistencia($_POST['consistencia']);
                    $exame->setInsercao($_POST['insercao']);
                    $exame->setSinaisSecundarios($_POST['sinaisSecundarios']);

                    $exameDAO->update($exame, $idExame);

                    header('Location: Exame.php?exa=' . $_POST['paciente']);
                }
            }
            break;
        default:
            break;
    }
} else if (isset($_POST['del'])) {
    //verifica se foi selecionado pelo menos um item a ser deletado
    if (is_array($_POST['del'])) {
        foreach ($_POST['del'] as $id) {
            echo "Deletando " . $id;
            $exameDAO->delete($id);  //VERIFICAR PORQUE NÃO ESTÁ DELETANDO
        }
    }

    $idPaciente = $_POST['idPaciente'];
    $nome = $paciente->select($idPaciente);
    $sm->assign("prontuario", $idPaciente);
    $sm->assign("nome", $nome[0]['nome']);

    $lstExame = $exameDAO->select($idPaciente);
    $sm->assign("lstExames", $lstExame);

    if ($lstExame) {
        for ($i = 0, $length = count($lstExame); $i < $length; $i++) {
            $sm->assign("data", $exame->convertData($lstExame[$i]['dataExame']));
        }
    }



    $sm->display('view/lstExames.tpl');
} else if (isset($_GET['exa'])) {
    if (isset($_POST['pesquisa'])) {

        $pesquisa = $exameDAO->search($_GET['exa'], $_POST['pesquisa']);

        if ($pesquisa) {
            $sm->assign("nome", $pesquisa[0]['nome']);
            $sm->assign("data", $exame->convertData($pesquisa[0]['dataExame']));
        }

        $sm->assign("lstExames", $pesquisa);

        $sm->display('view/lstExames.tpl');
    } else if (isset($_GET['ed'])) {
        $idPaciente = $_GET['exa'];
        $idExame = $_GET['ed'];

        $nome = $paciente->select($idPaciente);
        $sm->assign("prontuario", $idPaciente);
        $sm->assign("nome", $nome[0]['nome']);

        $exame = $exameDAO->selectEdit($idPaciente, $idExame);
        $sm->assign("exame", $exame);

        $sm->display('view/editExame.tpl');
    } else {
        $idPaciente = $_GET['exa'];
        $nome = $paciente->select($idPaciente);
        $sm->assign("prontuario", $idPaciente);
        $sm->assign("nome", $nome[0]['nome']);

        $lstExame = $exameDAO->select($idPaciente);

        if ($lstExame) {
            for ($i = 0, $length = count($lstExame); $i < $length; $i++) {
                $lstExame[$i]['dataExame'] = $exame->date2BR($lstExame[$i]['dataExame']);
            }
        }
        
        $sm->assign("lstExames", $lstExame);
        
        $sm->display('view/lstExames.tpl');
    }
} else if (isset($_GET['nexa'])) {
    $idPaciente = $_GET['nexa'];
    $nome = $paciente->select($idPaciente);
    $sm->assign("nome", $nome[0]['nome']);
    $sm->assign("prontuario", $idPaciente);

    $sm->display('view/exameFisico.tpl');
} else {
    header('Location: ErrorPage.php');
}