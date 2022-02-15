<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
*
* Descrição de Carro
*
* @author Thiago de Moura Machado
*
*/

class Carro extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('estou_logado')){
            redirect('Login');
            }
        $this->load->model('Carro_model', 'carro'); // carro este é um apelido para o model
        $this->load->model('Pessoa_model', 'pessoa'); // pessoa este é um apelido para o model
    }

    public function index() {
        $lista['carros'] = $this->carro->listar();
        $lista['pessoas'] = $this->pessoa->listar();
        $this->load->view('template/header');
        $this->load->view('carroCadastro', $lista);
        $this->load->view('template/footer');
    }

    public function inserir() {
        // Nome no vetor deve ser o mesmo nome do campo na tabela
        $dados['cor'] = $this->input->post('cor');
        $dados['marca'] = $this->input->post('marca');
        $dados['modelo'] = $this->input->post('modelo');
        $dados['placa'] = $this->input->post('placa');
        $dados['portas'] = $this->input->post('portas');
        $dados['idPessoa'] = $this->input->post('idPessoa');
        /* 
        if($this->input->post('tpPessoa')=='Fisica') {
            $dados['cpf'] = $this->input->post('cpf');
            $dados['sexo'] = $this->input->post('sexo');
        } else {
            $dados['cnpj'] = $this->input->post('cnpj');
            $dados['nomeFantasia'] = $this->input->post('nomeFantasia');
        }
        */
        $result = $this->carro->inserir($dados);
        if($result == true) {
            $this->session->set_flashdata('true','msg');
            redirect('carro');
        } else {
            $this->session->set_flashdata('err','msg');
            redirect ('carro');
        }
    }

    public function excluir($id) {
        $result = $this->carro->deletar($id);
        redirect('carro');
        }
    
    public function editar($idCarro) {
        $data['carro'] = $this->carro->editar($idCarro);
        $data['pessoas'] = $this->pessoa->listar();
        $this->load->view('template/header');
        $this->load->view('carroEditar',$data);
        $this->load->view('template/footer'); 
    }

    public function atualizar() {
        // Este é o lado do BD = Este é o lado da View

        $dados['cor'] = $this->input->post('cor');
        $dados['marca'] = $this->input->post('marca');
        $dados['modelo'] = $this->input->post('modelo');
        $dados['placa'] = $this->input->post('placa');
        $dados['portas'] = $this->input->post('portas');
        $dados['idPessoa'] = $this->input->post('idPessoa');
        $dados['idCarro'] = $this->input->post('idCarro');

        /*
        if($this->input->post('tpPessoa')=='Fisica') {
            $dados['cpf'] = $this->input->post('cpf');
            $dados['sexo'] = $this->input->post('sexo');
        } else {
            $dados['cnpj'] = $this->input->post('cnpj');
            $dados['nomeFantasia'] = $this->input->post('nomeFantasia');
        }
        */
        if ($this->carro->atualizar($dados) == true) {
            $this->session->set_flashdata('true','msg');
            redirect('carro');
        } else {
            $this->session->set_flashdata('err','msg');
            redirect ('carro');
        }
    }

}