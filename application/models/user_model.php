<?php

class User_model extends CI_Model{

    // public function get_users($user_id){

    //     //manualy config database
    //     // $config['hostname']='localhost';
    //     // $config['username']='root';
    //     // $config['password']='';
    //     // $config['database']='errand_db';

    //     // $connection = $this->load->database($config);
    //    // $this->db->where('id',$user_id);
    //     $this->db->where([
    //         'id'=>$user_id
    //         ]);
    //      $query=$this->db->get('users');
    //     //$query = $this->db->query('select * from users'); manualy qeury
    //      return $query->result();
    // }

    // public function create_users($data){
    //     $this->db->insert('users',$data);
    // }

    // public function update_users($data,$id){

    //     $this->db->where(['id'=>$id]);
    //     $this->db->update('users',$data);
    // }

    // public function delete_users($id){

    //     $this->db->where(['id'=>$id]);
    //     $this->db->delete('users');
    // }

    public function login_user($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);

        $result = $this->db->get('users');

        if($result->num_rows()==1){

            return $result->row(0)->id;

        }else{
            return false;
        }
    }

}

?>