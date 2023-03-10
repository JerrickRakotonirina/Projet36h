<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

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
	public function index(){
		$this->load->view('header');
		$this->load->view('signup');
		$this->load->view('footer');
	}
	public function check()
	{
		$this->load->model('login_model');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$this->login_model->inscrire($name, $email, $pass);
		redirect('Signin');
	}	
}
