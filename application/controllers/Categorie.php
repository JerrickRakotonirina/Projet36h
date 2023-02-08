<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Controller {

	public function index()
	{
        $this->load->model('fonction');
        $tableau['categorie'] = $this->fonction->getAllCategorie();

        $this->load->view('header');
		$this->load->view('categorie', $tableau);
		$this->load->view('footer');
		
	}
	public function traitement_categorie()
	{
        $this->load->model('fonction');
        $this->fonction->ajouterCategorie( $_POST['nomcategorie']);
        redirect('Categorie');
        
    }
}