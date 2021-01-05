<?php
class Auth extends CI_Controller {

    public function login(){
        $this->form_validation->set_rules('contact','contact','required');
        $this->form_validation->set_rules('password','password','required');

        if($this->form_validation->run()){
            $data = [
                'contact' => $_POST['contact'],
                'password' => md5($_POST['password']),
            ];
            if($this->datawork->checkData("account",$data)){
                $this->session->set_userdata("admin",$_POST['contact']);
                redirect("admin/index");

            }else{
                $this->session->set_flashdata('error', 'Contact and Password is incorrect');
                redirect('auth/login'); 
            }
        }

        $this->load->view("public/include/header");
        $this->load->view("auth/login");
        $this->load->view("public/include/footer");
    }
	public function signup(){
        $this->form_validation->set_rules('name','name','required');
        $this->form_validation->set_rules('contact','contact','required');
        $this->form_validation->set_rules('email','email','required|valid_email|is_unique[account.email]');
        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules('confirm_pass','confirm password','required|matches[password]');
        if($this->form_validation->run()){
            $data = [
                'name' => $_POST['name'],
                'contact' => $_POST['contact'],
                'email' => $_POST['email'],
                'password' => md5($_POST['password'])
            ];
            $this->db->insert('account',$data);
            redirect('auth/login');
        }
        else{
            $this->load->view('public/include/header');
            $this->load->view('auth/signup');
            $this->load->view('public/include/footer');
            
        }
    }

    public function logout(){
        $this->session->unset_userdata('admin');
        redirect('home/index');
    }
}
?>