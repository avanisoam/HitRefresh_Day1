<?php
class Hello_Model extends CI_Model {
     
    function saverecords($name , $email , $mobile){

        $query = "insert into users values('' , '$name' , '$email' , '$mobile')";
        $this->db->query($query);

    }

    function displayrecords(){
        $query = $this->db->query("select * from users");
        return $query->result();
    }

    function deleterecords($id){
        $this->db->query("delete from users where Id='".$id."'");
    }

    function displayrecodsById($id){
     $query = $this->db->query("select * from users where Id='".$id."'");
     return $query->result();
    }

    function updaterecords($name , $email , $mobile , $id){
        $query= $this->db->query("update users SET Name= '$name' , Email= '$email' , Mobile= '$mobile' where Id= '".$id."'");
    }
}
?>