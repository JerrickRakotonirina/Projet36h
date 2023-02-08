<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Statistique extends CI_Controller
{

	public function index()
	{
        $this->load->model('Fonction');
        $nbutilisateur['nbutilisateur'] = $this->Fonction->countMembre();
        $nbutilisateur['nbtransaction'] = $this->Fonction->countEchange();
		
		$this->load->view('header');
		$this->load->view('statistique', $nbutilisateur);
		$this->load->view('footer');
	}

}