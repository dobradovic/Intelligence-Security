<?php

class dogadjajimodel extends CI_Model{

    function __construct() {
     parent::__construct();
     $this->load->database();
    }

    function ucitajDogadjaje(){
      $this->db->select('*');
      $this->db->from('dogadjaji');

      $query = $this->db->get();

      return $query->result();
    }

    function ucitajJedanDogadjaj($id_dogadjaj){
      $this->db->select('*');
      $this->db->from('dogadjaji');
        $this->db->where('id_dogadjaj',$id_dogadjaj);

      $query = $this->db->get();

      return $query->result();
    }

    function obrisi_dogadjaj($id){
        $this->db->where('id_dogadjaj', $id);
        $this->db->delete('dogadjaji');
    }

      //Novi event
    function unesi_dogadjaj($data)
    {
        $this->db->insert('dogadjaji',$data);
        return $this->db->insert_id();
    }

    function ucitajProjekte(){
      $this->db->select('*');
      $this->db->from('projekti');
        $this->db->where('status', null);

      $query = $this->db->get();

      return $query->result();
    }

    function ucitajProjekteStatus(){
      $this->db->select('*');
      $this->db->from('projekti');
      $this->db->where('status','1');

      $query = $this->db->get();

      return $query->result();
    }

    function citajJedanProjekat($id_projekta){

        $this->db->select('*');
        $this->db->from('projekti');
        $this->db->where('id_projekta',$id_projekta);

        $query = $this->db->get();

        return $query->result();



    }

    function dogadjaji_slike($id_dogadjaj){
      $this->db->select('*');
      $this->db->from('dogadjaji');
      $this->db->join('dogadjaji_slike','dogadjaji_slike.id_dogadjaj = dogadjaji.id_dogadjaj');
      $this->db->where('dogadjaji.id_dogadjaj',$id_dogadjaj);


     $query = $this->db->get();

     return $query->result();
    }

    function projekti_slike($id_projekta){
      $this->db->select('*');
      $this->db->from('projekti');
      $this->db->join('projekti_slike','projekti_slike.id_projekta = projekti.id_projekta');
      $this->db->where('projekti.id_projekta',$id_projekta);


     $query = $this->db->get();

     return $query->result();
    }




    }
