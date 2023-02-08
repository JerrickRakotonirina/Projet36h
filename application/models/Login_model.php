<?php

class Login_model extends CI_Model
{
    private function selectAllUsers()
    {
        $req = "select * from membre";
        $requete = sprintf($req);
        $query = $this->db->query($requete);
        $result = $query->result_array();
        $valiny = array();

        foreach ($result as $row) {
            $valiny[] = $row;
        }
        return $valiny;
    }
    public function selectUser($colonne, $valeur)
    {
        $req = "select * from membre where %s='%s'";
        $requete = sprintf($req,$colonne,$valeur);
        // echo($requete);
        $query = $this->db->query($requete);
        $result = $query->result_array();
        $valiny = array();

        foreach ($result as $row) {
            $valiny[] = $row;
        }
        return $valiny;
    }
    public function check($mail, $mdp)
    {
        $users = $this->selectAllUsers();
        foreach ($users as $user) {
            $email = $user['email'];
            $pass = $user['mdp'];
            if ($email == $mail && $pass == $mdp) {
                $membre = $this->selectUser("email",$email);
                $this->session->set_userdata('user',$membre);
                return "true";
            }
        }
        return "false";
    }

    public function inscrire($nom, $mail, $mdp)
    {
        $req = "insert into membre values (NULL,'%s','%s','%s','0')";
        $requete = sprintf($req,$nom,$mail,$mdp);
        $this->db->query($requete);
    }

    public function profil()
    {
        $this->load->view('home');
    }

    
}
