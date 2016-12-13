<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asignaturas extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
		public function __construct() {
		parent::__construct();
		$this->load->model('Asignaturas_model');
	}

	public function index() {
		$this->load->template('welcome_message');
	}

	public function json() {
    $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode(array('data' => ($this->Asignaturas_model->get_asignaturas() != false > 0 ? $this->Asignaturas_model->get_asignaturas()->result() : ''))));
	}

	public function eliminar() {
		$id = $this->input->post('id');

		$this->Asignaturas_model->delete_asignatura($id);
		$this->output
		  ->set_content_type('application/json')
		  ->set_output(json_encode(array('mensaje' => 'Pelicula eliminada satisfactoriamente.')));
	}

	public function agregar() {
		$id = $this->input->post('id');
		$nom = $this->input->post('nombre');
		$sin = $this->input->post('sinopsis');
		$fecha = $this->input->post('fecha_estreno');
		$gen = $this->input->post('genero');

		$this->Asignaturas_model->set_asignatura($id, $nom, $sin, $fecha, $gen);
    $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode(array('mensaje' => 'Las peliculas se han agregado satisfactoriamente.')));
	}

	public function editar() {
		$id = $this->input->post('id');
		$nom = $this->input->post('nombre');
		$sin = $this->input->post('sinopsis');
		$fecha = $this->input->post('fecha_estreno');
		$gen = $this->input->post('genero');

		$this->Asignaturas_model->update_asignatura($id, $nom, $sin, $fecha, $gen);
		// La pelicula se ha editado satisfactoriamente.
    $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode(array('mensaje' => 'Las peliculas se han editado satisfactoriamente.')));
	}
}
