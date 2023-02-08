<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signin extends CI_Controller
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
		$this->load->view('header');
		$this->load->view('signin');
		$this->load->view('footer');
	}

	public function check()
	{
		$this->load->model('login_model');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$verification = $this->login_model->check($email, $pass);
		// echo $verification;
		if ($verification == "true") {
			// $this->session->set_userdata('testSession', $email); //creer session
			//load : tsy manova URL
			redirect('Home');
			// $this->load->view('header');
			// $this->load->view('Home');
			// $this->load->view('footer');

		} else {

			$this->load->view('tsynety');
		}
	}
	public function disconnect()
    {
        $this->session->unset_userdata('user');
        redirect('Signin');
    }
}
