<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TraitementProposition extends CI_Controller {

	public function index()
	{
        $this->load->model('fonction');
        $this->fonction->sendProposition($_POST['objet1'], $_POST['objet2']);
        redirect('Home');
		
	}
	
}
