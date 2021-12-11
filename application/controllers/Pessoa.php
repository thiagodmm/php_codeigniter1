<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
*
* Descrição de Pessoa
*
* @author Thiago de Moura Machado
*
*/

class Pessoa extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('Pessoa_model', 'pessoa'); //pessoa este é um apelido para o model
    }

    public function index() {
        $lista['pessoas'] = $this->pessoa->listar();
        $this->load->view('pessoaCadastro', $lista);
    }

    public function inserir() {
        // Nome no vetor deve ser o mesmo nome do campo na tabela
        $dados['nome'] = $this->input->post('nome');
        $dados['telefone'] = $this->input->post('telefone');
        $dados['email'] = $this->input->post('email');
        $dados['endereco'] = $this->input->post('endereco');
        if($this->input->post('tpPessoa')=='Fisica') {
            $dados['cpf'] = $this->input->post('cpf');
            $dados['sexo'] = $this->input->post('sexo');
        } else {
            $dados['cnpj'] = $this->input->post('cnpj');
            $dados['nomeFantasia'] = $this->input->post('nomeFantasia');
        }
        $result = $this->pessoa->inserir($dados);
        if($result == true) {
            $this->session->set_flashdata('true','msg');
            redirect('pessoa');
        } else {
            $this->session->set_flashdata('err','msg');
            redirect ('pessoa');
        }
    }

    public function excluir($id) {
        $result = $this->pessoa->deletar($id);
        redirect('pessoa');

        }
    }

