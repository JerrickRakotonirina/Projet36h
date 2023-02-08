<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

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
		$this->load->view('login');
		
	}
    
    public function check(){
        $this->load->model('login_model');
        $email=$this->input->post('email');
        $pass=$this->input->post('pass');
        $verification = $this->login_model->check($email,$pass);
        // echo $verification;
        if ($verification == "true") {
            $this->session->set_userdata('testSession',$email);//creer session
            //load : tsy manova URL
            $this->load->view('home');

        }else{redirect('Login_controller/index');}
    }

	public function disconnect(){
		$this->load->model('login_model');
		$this->login_model->disconnect();
	}

	/* public function hello($pseudo=''){
		echo 'Salut a toi :'.$pseudo.'<br/>';
	} */
}
