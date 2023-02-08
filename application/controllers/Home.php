<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

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
	public function index()
	{
		if ($this->session->userdata('user')) {
			$this->load->model('fonction');
			$user = $this->session->userdata('user');
			$id = $user[0]['id_membre'];
			$result['myobjet'] = $this->fonction->getMyObjet($id);

			$this->load->model('TestDb');
			$this->load->model('Fonction');
			$user = $this->session->userdata('user');
			$id = $user[0]['id_membre'];
			$result['tableau'] = $this->TestDb->select($id);
			$result['categorie'] = $this->Fonction->getAllCategorie();
			$this->load->view('header');
			$this->load->view('index', $result);
			$this->load->view('footer');
		} else {
			redirect('Signin');
		}
	}
}
