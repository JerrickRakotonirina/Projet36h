<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mes_objets extends CI_Controller {

	public function index()
	{
        $this->load->model('fonction');
        $this->load->model('TestDb');
        $user = $this->session->userdata('user');
        $id = $user[0]['id_membre'];
        $tableau['categorie'] = $this->fonction->getAllCategorie();
        $tableau['myobjet'] = $this->fonction->getMyObjet($id);

        $this->load->view('header');
		$this->load->view('mes_objets', $tableau);
		$this->load->view('footer');
		
	}
	public function traitement_mes_objets()
    {
        if (isset($_FILES['photo'])) {
            $dossier = 'assets/images/';
            $fichier = basename($_FILES['photo']['name']);

            $extensions = array('.png', '.gif', '.jpg', '.jpeg');

            $extension = strrchr($_FILES['photo']['name'], '.');

            if (!in_array($extension, $extensions)) {
                $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc';
            }

            $taille_maxi = 1000000;

            $taille = filesize($_FILES['photo']['tmp_name']);
            if ($taille > $taille_maxi) {
                $erreur = 'Le fichier est trop gros...';
                echo $erreur;
            } else {
                echo "mety";
            }

            $fichier = strtr($fichier,     'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',     'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');

            $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $dossier . $fichier)) //si
            {
                echo 'Upload effectué avec succès !';
            } else {
                echo "Echec de l'upload !";
            }

            $this->load->model('fonction');
            $this->load->model('TestDb');
            $user = $this->session->userdata('user');
            $id = $user[0]['id_membre'];
            $this->fonction->InsererObjet($_POST['categorie'], $id, $_POST['titre'], $fichier, $_POST['prix']);
        }
    }
}
