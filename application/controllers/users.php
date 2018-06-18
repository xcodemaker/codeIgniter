<?php   

class Users extends CI_Controller{

    // public function show($user_id){
        
    //     // $this->load->model('user_model');

    //     $data['result'] = $this->user_model->get_users($user_id);

    //     // foreach($result as $object){
    //     //     echo $object->id;
    //     // }    
    //     // $data['welcome']='Welcome to my page';
    //     $this->load->view('user_view',$data);
    // }

    // public function insert(){

    //     $username='shashini';
    //     $password = '1235';

    //     $this->user_model->create_users([
    //         'username' => $username,
    //         'password' => $password
    //     ]);
    // }

    // public function update(){
    //     $id=3;
    //     $username='shashini bhagya';
    //     $password = 'secret';

    //     $this->user_model->update_users([
    //         'username' => $username,
    //         'password' => $password
    //     ],$id);
    // }

    // public function delete(){
    //     $id=2;

    //     $this->user_model->delete_users($id);
    // }

    public function login(){
        // echo 'this is work';
        // echo $_POST['username'];

        //$this->input->post('username');

        $this->form_validation->set_rules('username','Username','required|min_length[3]');
        $this->form_validation->set_rules('password','Password','required|min_length[3]');
        $this->form_validation->set_rules('confirm_password','Confirm Password','required|min_length[3]|matches[password]');

        if($this->form_validation->run()==FALSE){
            $data =array(
                'errors' => validation_errors()
            );

            $this->session->set_flashdata($data);

            redirect('home');
        }else{

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user_id = $this->user_model->login_user($username,$password);

            if($user_id){
                $user_data=array(
                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true
                );

                $this->session->set_userdata($user_data);

                $this->session->set_flashdata('login_success','you are now logged in');

                redirect('home/index');
            }else{
                $this->session->set_flashdata('login_failed',' Sorry you are not logged in');
                redirect('home/index');
            }
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('home/index');
    }
}

?>