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

}