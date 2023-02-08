<?php

class Fonction extends CI_Model
{
    public function getAllCategorie(){
        $query = $this->db->query('select * from categorie');
        foreach($query->result_array() as $row){
            $valiny[] = $row;
        }
        return $valiny;
    }

    public function getMyObjet($id){
        $sql = "select * from objet where id_membre='%s'";
        $sql = sprintf($sql, $id);
        $query = $this->db->query($sql);
        $valiny = array();
        foreach($query->result_array() as $row){
            $valiny[] = $row;
        }
        return $valiny;
    }

    public function InsererObjet($idcategorie, $idmembre, $titre, $photo, $prix){
        $sql = "insert into objet values(NULL, $idcategorie, $idmembre, '$titre', '$photo', $prix)";
        $query = $this->db->query($sql);
    }

    public function ajouterCategorie($nomCategorie){
        $sql = "insert into categorie values(NULL, '$nomCategorie')";
        $query = $this->db->query($sql);
    }

    public function recherchetous($titre){
        $sql = "select * from objet where titre like '%$titre%'";
        $query = $this->db->query($sql);
        $valiny = array();
        foreach($query->result_array() as $row){
            $valiny[] = $row;
        }
        return $valiny;
    }

    public function recherchecategorie($titre, $categorie){
        $sql = "select * from objet where titre like '%$titre%' and id_categorie=$categorie";
        $query = $this->db->query($sql);
        $valiny = array();
        foreach($query->result_array() as $row){
            $valiny[] = $row;
        }
        return $valiny;
    }

    public function sendProposition($id_objet1,$id_objet2){
        $sql = "insert into proposition values(NULL, '$id_objet1', '$id_objet2', false)";
        $query = $this->db->query($sql);
    }

    public function countMembre(){
        $sql = "select count(id_membre) from membre where est_Admin=0";
        $query = $this->db->query($sql);
        $valiny = $query->row_array();
        return $valiny['count(id_membre)'];
    }

    public function countEchange(){
        $sql = "select count(id_proposition) from proposition where confirmation=1";
        $query = $this->db->query($sql);
        $valiny = $query->row_array();
        return $valiny['count(id_proposition)'];
    }

    public function getAllProposition($id_user){
        $sql="select p.id_proposition, o1.titre as objet1, m1.nom as nom1, o2.titre as objet2, m2.nom as nom2 from proposition p join objet o1 on p.id_objet1=o1.id_objet join objet o2 on p.id_objet2=o2.id_objet join membre m1 on o1.id_membre=m1.id_membre join membre m2 on o2.id_membre=m2.id_membre where confirmation=0 and o1.id_membre='$id_user'";
        $query = $this->db->query($sql);
        $result = array();
        foreach($query->result_array() as $row){
            $result[] = $row;
        }
        return $result;
    }
    
}
