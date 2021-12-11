<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Pessoa_model
 *
 * @author Thiago de Moura Machado
 */
class Pessoa_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function inserir($p) {
    return $this->db->insert('pessoa',$p); //pessoa é o nome da tabela no banco
  }

  function deletar ($id) {
      $this->db->where('idPessoa',$id);
      return $this->db->delete('pessoa');

  }

  function listar() {
    $this->db->select('*');
    $this->db->from('pessoa');
    $this->db->order_by('sexo','ASC');
    $this->db->order_by('nome','ASC');
    $query = $this->db->get();
    return $query->result();
  }

}