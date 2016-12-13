<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Asignaturas_model extends CI_Model {
  
  public function __construct() {
    parent::__construct();
  }

  public function set_asignatura($id, $nom, $sin, $fecha, $gen) {
    $data = array(
      'id' => $id,
      'nombre' => $nom,
      'sinopsis' => $sin,
      'fecha_estreno' => $fecha,
      'genero' => $gen
    );

    $this->db->insert('peliculas', $data);
  }

  public function delete_asignatura($id) {
    $data = array(
      'id' => $id
    );

    $this->db->delete('peliculas', $data);
  }

  public function update_asignatura($id, $nom, $sin, $fecha, $gen) {
    $this->db->where('id', $id);
    $this->db->set('nombre', $nom);
    $this->db->where('sinopsis', $sin);
    $this->db->where('fecha_estreno', $fecha);
    $this->db->where('genero', $gen);
    $this->db->update('peliculas');
  }

  public function get_asignaturas() {
    $this->db->select('*');
    $this->db->from('asssssignaturas');
    $this->db->order_by('codigo DESC');
    $query = $this->db->get();

    if($query->num_rows() > 0) {
      return $query;
    } else {
      return false;
    }
  }
}

?>