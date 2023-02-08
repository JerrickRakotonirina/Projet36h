<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Recherche extends CI_Controller
{

    public function index()
    {
        $this->load->model('fonction');
        $user = $this->session->userdata('user');
        $id = $user[0]['id_membre'];
        $tableau['myobjet'] = $this->fonction->getMyObjet($id);

        $this->load->model('fonction');
        if ($_GET['cat'] == 0) {
            $tableau['resultat'] = $this->fonction->recherchetous($_GET['titre']);
        } else {
            $tableau['resultat'] = $this->fonction->recherchecategorie($_GET['titre'], $_GET['cat']);
        }

        $this->load->view('header');
        $this->load->view('recherche', $tableau);
        $this->load->view('footer');
    }
}
