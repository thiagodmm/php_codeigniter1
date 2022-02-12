<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Usuario_model
 *
 * @author Thiago de Moura Machado
 */
class Usuario_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function inserir($p) {
    return $this->db->insert('usuario',$p); //usuario é o nome da tabela no banco
  }

  function deletar ($id) {
      $this->db->where('idUser',$id);
      return $this->db->delete('usuario');
  }

  function editar($idUser) {
      $this->db->where('idUser',$idUser);
      $result = $this->db->get('usuario');
      return $result->result();
  }

  function atualizar($data) {
      $this->db->where('idUser',$data['idUser']);
      $this->db->set($data);
      return $this->db->update('usuario');
  }

  function listar() {
    $this->db->select('*');
    $this->db->from('usuario');
    $this->db->order_by('nomeUser','ASC');
    $this->db->order_by('email','ASC');
    $query = $this->db->get();
    return $query->result();
  }

}