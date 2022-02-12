<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
*
* Descrição de Usuario
*
* @author Thiago de Moura Machado
*
*/

class Usuario extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('Usuario_model', 'usuario'); //usuario é um apelido para o model
    }

    public function index() {
        $lista['usuarios'] = $this->usuario->listar();
        $this->load->view('usuarioCadastro', $lista);
    }

    public function inserir() {
        // Nome no vetor deve ser o mesmo nome do campo na tabela
        $dados['nomeUser'] = $this->input->post('nomeUser');
        $dados['email'] = $this->input->post('email');
        $dados['pas'] = $this->input->post('pas');

        $result = $this->usuario->inserir($dados);
        if($result == true) {
            $this->session->set_flashdata('true','msg');
            redirect('usuario');
        } else {
            $this->session->set_flashdata('err','msg');
            redirect ('usuario');
        }
    }

    public function excluir($id) {
        $result = $this->usuario->deletar($id);
        redirect('usuario');
        }

        public function editar($idUser) {
            $data['usuario'] = $this->usuario->editar($idUser);
            $this->load->view('usuarioEditar',$data); 
        }

        public function atualizar() {
            // Este é o lado do BD = Este é o lado da View
            $dados['nomeUser'] = $this->input->post('nomeUSer');
            $dados['email'] = $this->input->post('email');
            $dados['pas'] = $this->input->post('pas');

            if ($this->usuario->atualizar($dados) == true) {
                $this->session->set_flashdata('true','msg');
                redirect('usuario');
            } else {
                $this->session->set_flashdata('err','msg');
                redirect ('usuario');
            }
        }

}

