<?php

require_once './config/imports.php';
require_once './config/sm.php';
require_once './config/Configs.php';

$paciente = new Paciente();
$pessoa = new Pessoa();
$pacienteDAO = new PacienteDAO();
$pessoaDAO = new PessoaDAO();
$estados = new EstadosDAO();
$anamnese = new Anamnese();
$anamneseDAO = new AnamneseDAO();

$sm->assign("usuario", 'Talita Lima');

//lista de estados
$uf = $estados->select();
$sm->assign("lista", $uf);

if (isset($_POST['acao'])) {
    $acao = $_POST['acao'];

    switch ($acao) {
        case 'cadastrar':
            //verifica se os campos do formulario estam setados
            if (isset($_POST['nome']) and isset($_POST['sexo']) and isset($_POST['dt_nascimento']) and isset($_POST['naturalidade']) and isset($_POST['est_civil']) and isset($_POST['cpf']) and isset($_POST['endereco']) and isset($_POST['bairro']) and isset($_POST['cidade']) and isset($_POST['uf']) and isset($_POST['telefone']) and isset($_POST['celular']) and isset($_POST['email']) and isset($_POST['convenio'])) {

                //verifiva se os campos obrigatórios estão devidamente preenchidos / validação
                if ($_POST['nome'] != '' and $_POST['sexo'] != '' and $_POST['dt_nascimento'] != '' and $_POST['naturalidade'] != '' and $_POST['est_civil'] != '' and $_POST['cpf'] != '' and $_POST['endereco'] != '' and $_POST['bairro'] != '' and $_POST['cidade'] != '' and $_POST['uf'] != '' and $_POST['telefone'] != '' and $_POST['celular'] != '' and $_POST['email'] != '' and $_POST['convenio'] != '') {

                    //verifica se o paciente já está cadastrado com o email informado
                    if (!$pessoaDAO->verificaCPF($_POST['cpf'])) {
                        $pessoa->setNome($_POST['nome']);
                        $pessoa->setRg($_POST['rg']);
                        $pessoa->setCpf($_POST['cpf']);
                        $pessoa->setSexo($_POST['sexo']);
                        $pessoa->setEstadoCivil($_POST['est_civil']);
                        $pessoa->setDataNascimento($_POST['dt_nascimento']);
                        $pessoa->setNaturalidade($_POST['naturalidade']);
                        $pessoa->setRua($_POST['endereco']);
                        $pessoa->setNumero($_POST['numero']);
                        $pessoa->setComplemento($_POST['complemento']);
                        $pessoa->setBairro($_POST['bairro']);
                        $pessoa->setCidade($_POST['cidade']);
                        $pessoa->setUf($_POST['uf']);
                        $pessoa->setPais("BR");
                        $pessoa->setCep($_POST['cep']);
                        $pessoa->setTelefone($_POST['telefone']);
                        $pessoa->setCelular($_POST['celular']);
                        $pessoa->setEmail($_POST['email']);
                        if (!empty($_FILES["foto"]["name"])) {
                            $pessoa->setFoto($_FILES["foto"]["name"]);
                        } else if ($_POST['sexo'] == "F") {
                            $pessoa->setFoto("woman.png");
                        } else {
                            $pessoa->setFoto("man.png");
                        }

                        $idPessoa = $pessoaDAO->insert($pessoa);

                        $paciente->setResponsavel($_POST['responsavel']);
                        $paciente->setIdPessoa($idPessoa);
                        $paciente->setConvenio($_POST['convenio']);

                        $idPaciente = $pacienteDAO->insert($paciente);
                        
                        //redirecionando para o novo paciente
                        $idade = $pessoa->calculaIdade($pessoa->date2US($_POST['dt_nascimento']));
                        $p = $pacienteDAO->select($idPaciente);
                        $sm->assign("idade", $idade);
                        $sm->assign("p", $p);

                        $sm->display('view/posAnamnese.tpl');
                    } else {
                        echo '<script>window.location="Paciente.php";alert("PACIENTE JÁ CADASTRADO!");</script>';
                    }
                }
            }
            break;

        case 'atualizar':
            if (isset($_POST['nome']) and isset($_POST['sexo']) and isset($_POST['dt_nascimento']) and isset($_POST['naturalidade']) and isset($_POST['est_civil']) and isset($_POST['endereco']) and isset($_POST['bairro']) and isset($_POST['cidade']) and isset($_POST['uf']) and isset($_POST['telefone']) and isset($_POST['celular']) and isset($_POST['email']) and isset($_POST['convenio'])) {

                //verifiva se os campos obrigatórios estão devidamente preenchidos / validação
                if ($_POST['nome'] != '' and $_POST['sexo'] != '' and $_POST['dt_nascimento'] != '' and $_POST['naturalidade'] != '' and $_POST['est_civil'] != '' and $_POST['endereco'] != '' and $_POST['bairro'] != '' and $_POST['cidade'] != '' and $_POST['uf'] != '' and $_POST['telefone'] != '' and $_POST['celular'] != '' and $_POST['email'] != '' and $_POST['convenio'] != '') {
                    $pessoa->setNome($_POST['nome']);
                    $pessoa->setRg($_POST['rg']);
                    $pessoa->setSexo($_POST['sexo']);
                    $pessoa->setEstadoCivil($_POST['est_civil']);
                    $pessoa->setDataNascimento($_POST['dt_nascimento']);
                    $pessoa->setNaturalidade($_POST['naturalidade']);
                    $pessoa->setRua($_POST['endereco']);
                    $pessoa->setNumero($_POST['numero']);
                    $pessoa->setComplemento($_POST['complemento']);
                    $pessoa->setBairro($_POST['bairro']);
                    $pessoa->setCidade($_POST['cidade']);
                    $pessoa->setUf($_POST['uf']);
                    $pessoa->setPais("BR");
                    $pessoa->setCep($_POST['cep']);
                    $pessoa->setTelefone($_POST['telefone']);
                    $pessoa->setCelular($_POST['celular']);
                    $pessoa->setEmail($_POST['email']);
                    if (!empty($_FILES["foto"]["name"])) {
                        $pessoa->setFoto($_FILES["foto"]["name"]);
                    } else {
                        $pessoa->setFoto($_POST['pic']);
                    }
                    $pessoa->setAtivo(true);

                    $pessoaDAO->update($pessoa, $_POST['pessoa']);

                    $paciente->setResponsavel($_POST['responsavel']);
                    $paciente->setIdPessoa($_POST['pessoa']);
                    $paciente->setConvenio($_POST['convenio']);
                    $paciente->setStatus(true);

                    $pacienteDAO->update($paciente, $_POST['paciente']);

                    //lista de pacientes cadastrados
                    $p = $pacienteDAO->select($_POST['paciente']);
                    $idade = $pessoa->getIdade($p[0]['dataNascimento']);

                    $sm->assign("idade", $idade);
                    $sm->assign("p", $p);

                    $sm->display('view/posAnamnese.tpl');
                }
            }
            break;
        default:
            break;
    }
} else if (isset($_GET['p'])) {
    $idPaciente = $_GET['p'];

    $p = $pacienteDAO->select($idPaciente);
    $idade = $pessoa->calculaIdade($p[0]['dataNascimento']);

    $sm->assign("idade", $idade);
    $sm->assign("p", $p);

    $sm->display('view/posAnamnese.tpl');
    //verifica se há algum paciente a ser deletado
} else if (isset($_POST['del'])) {
    //verifica se foi selecionado pelo menos um item a ser deletado
    if (is_array($_POST['del'])) {
        foreach ($_POST['del'] as $id) {
            $pacienteDAO->delete($id);
        }
    }

    $lstPaciente = $pacienteDAO->selectInner();
    $sm->assign("lstPaciente", $lstPaciente);

    $sm->display('view/lstPacientes.tpl');

    //verifica se algum paciente foi selecionado / 'pid' = Paciente ID
} else if (isset($_GET['pid'])) {
    $id = $_GET['pid'];
    $p = $pacienteDAO->select($id);

    $idade = $pessoa->calculaIdade($p[0]['dataNascimento']);

    $sm->assign("idade", $idade);
    $sm->assign("p", $p);

    $sm->display('view/pacientePreview.tpl');

    //verifica se o campo de edição esta setado / 'ped' = Paciente EDitar
} else if (isset($_GET['ped'])) {
    $p = $pacienteDAO->select($_GET['ped']);
    $dt_nasc = $pessoa->getDtNasc($p[0]['dataNascimento']);
    $sm->assign("dt_nasc", $dt_nasc);
    $sm->assign("p", $p);

    $sm->display('view/editPaciente.tpl');

    //verifica se o campo de pesquisa esta setado
} else if (isset($_POST['pesquisa'])) {
    $pesquisa = $pacienteDAO->search($_POST['pesquisa']);
    $sm->assign("lstPaciente", $pesquisa);

    $sm->display('view/lstPacientes.tpl');

    //verifica se o campo de anamnese esta setado / 'pan' = Paciente Anamnese
} else {
    //lista de pacientes cadastrados
    $lstPaciente = $pacienteDAO->selectInner();
    $sm->assign("lstPaciente", $lstPaciente);

    $sm->display('view/lstPacientes.tpl');
}
?>
