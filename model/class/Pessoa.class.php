<?php

require_once './db/PDOConnectionFactory.class.php';

class Pessoa extends PDOConnectionFactory {

    private $idPessoa;
    private $nome;
    private $rg;
    private $cpf;
    private $sexo;
    private $estadoCivil;
    private $dataNascimento;
    private $naturalidade;
    private $rua;
    private $numero;
    private $complemento;
    private $bairro;
    private $cidade;
    private $uf;
    private $pais;
    private $cep;
    private $telefone;
    private $celular;
    private $email;
    private $foto;
    private $ativo;

    public function __construct() {
        
    }

    public function Pessoa($nome, $rg, $cpf, $sexo, $estadoCivil, $dataNascimento, $naturalidade, $rua, $numero, $complemento, $bairro, $cidade, $uf, $pais, $cep, $telefone, $celular, $email, $foto, $ativo) {
        self::setNome($nome);
        self::setRg($rg);
        self::setCpf($cpf);
        self::setSexo($sexo);
        self::setEstadoCivil($estadoCivil);
        self::setDataNascimento($dataNascimento);
        self::setNaturalidade($naturalidade);
        self::setRua($rua);
        self::setNumero($numero);
        self::setComplemento($complemento);
        self::setBairro($bairro);
        self::setCidade($cidade);
        self::setUf($uf);
        self::setPais($pais);
        self::setCep($cep);
        self::setTelefone($telefone);
        self::setCelular($celular);
        self::setEmail($email);
        self::setFoto($foto);
        self::setAtivo($ativo);
    }

    public function getIdPessoa() {
        return $this->idPessoa;
    }

    public function setIdPessoa($idPessoa) {
        $this->idPessoa = $idPessoa;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getRg() {
        return $this->rg;
    }

    public function setRg($rg) {
        $this->rg = $rg;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getEstadoCivil() {
        return $this->estadoCivil;
    }

    public function setEstadoCivil($estadoCivil) {
        $this->estadoCivil = $estadoCivil;
    }

    //variavel $us é utilizada para diferenciar se retorna a data no formato
    //americano ou no brasileiro. Quando for requisitado por um insert ou update
    //receberá o valor true para passar no formato americano, que é o formato
    //que o banco espera receber
    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $this->date2US($dataNascimento);
    }

    public function getNaturalidade() {
        return $this->naturalidade;
    }

    public function setNaturalidade($naturalidade) {
        $this->naturalidade = $naturalidade;
    }

    public function getRua() {
        return $this->rua;
    }

    public function setRua($rua) {
        $this->rua = $rua;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getComplemento() {
        return $this->complemento;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getUf() {
        return $this->uf;
    }

    public function setUf($uf) {
        $this->uf = $uf;
    }

    public function getPais() {
        return $this->pais;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }

    public function getCep() {
        return $this->cep;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    public function getDtNasc($dtNasc) {
        return $this->date2BR($dtNasc);
    }

    public function getIdade($nascimento) {        
        $data_calcula = date("Y-m-d");
        
        $nascimento = strtotime($nascimento." 00:00:00");
        $data_calcula = strtotime($data_calcula." 00:00:00");
        
        //cálculo da idade fazendo a diferença entre as duas datas
        $idade = floor(abs($data_calcula-$nascimento)/60/60/24/365);
        
        return $idade;
    }
}

?>
