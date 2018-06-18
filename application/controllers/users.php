<?php   

class Users extends CI_Controller{

    public function show($user_id){
        
        // $this->load-model('user_model');

        $data['result'] = $this->user_model->get_users($user_id);

        // foreach($result as $object){
        //     echo $object->id;
        // }    
        // $data['welcome']='Welcome to my page';
        $this->load->view('user_view',$data);
    }

    public function insert(){

        $username='shashini';
        $password = '1235';

        $this->user_model->create_users([
            'username' => $username,
            'password' => $password
        ]);
    }

    public function update(){
        $id=3;
        $username='shashini bhagya';
        $password = 'secret';

        $this->user_model->update_users([
            'username' => $username,
            'password' => $password
        ],$id);
    }

    public function delete(){
        $id=2;

        $this->user_model->delete_users($id);
    }
}

?>