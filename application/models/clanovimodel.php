<?php

class clanovimodel extends CI_Model{

function citajClanove(){

    $this->db->select('*');
    $this->db->from('clanovi');


    $query = $this->db->get();

    return $query->result();
}


function citajJednogClana($id_clana){

    $this->db->select('*');
    $this->db->from('clanovi');
    $this->db->where('id_clana',$id_clana);

    $query = $this->db->get();

    return $query->result();

  
}
}
