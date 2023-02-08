<?php

class TestDb extends CI_Model
{

    public function select($idmembre)
    {
        $req = "select * from objet where id_membre!='%s'";
        $requete = sprintf($req,$idmembre);
        $query = $this->db->query($requete);
        $result = $query->result_array();
        $valiny = array();

        foreach ($result as $row) {
            $valiny[]=$row;
        }
        return $valiny;
    }
    public function selectMyobjects($idmembre)
    {
        $req = "select * from objet where id_membre='%s'";
        $requete = sprintf($req,$idmembre);
        $query = $this->db->query($requete);
        $result = $query->result_array();
        $valiny = array();

        foreach ($result as $row) {
            $valiny[]=$row;
        }
        return $valiny;
    }

    
}
