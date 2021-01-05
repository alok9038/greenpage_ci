<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        
        if(!$this->session->userdata('admin')){
            redirect('auth/login');
        }
    }

	public function index()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/index');
		$this->load->view('admin/include/footer');
    }
    public function category(){

        $data['category'] = $this->db->get('category')->result();
        $data['parent_cat'] = $this->db->where(['cat_parent'=>0])->get('category')->result();
        $this->form_validation->set_rules('title','category title','required');
        $this->form_validation->set_rules('parent_cat','Parent category','required');
        $this->form_validation->set_rules('description','category description','required');

        if($this->form_validation->run()){
            $data = [
                'cat_title' => $_POST['title'],
                'cat_parent' => $_POST['parent_cat'],
                'cat_description' => $_POST['description'],
            ];
            $this->db->insert('category',$data);
            redirect('admin/category');
        }
        else{

		$this->load->view('admin/include/header');
		$this->load->view('admin/add_category',$data);
		$this->load->view('admin/include/footer');
       }
    }

    public function add_biz(){

        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        $data['category']=$this->db->get('category')->result();
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('contact1','contact','required');
        $this->form_validation->set_rules('owner_name','owner_name','required');
        $this->form_validation->set_rules('description','description','required');
        $this->form_validation->set_rules('category','category','required');

        if($this->form_validation->run()){
            $config['upload_path']          = 'assets/upload/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';


            $this->load->library('upload',$config);

                if(!$this->upload->do_upload("image")){
                print_r($this->data['error '] = $this->upload->display_errors());
            }
            else{
                $data = [
                    'title' => $_POST['title'],
                    'slug' => $slug,
                    'contact1' => $_POST['contact1'],
                    'contact2' => $_POST['contact2'],
                    'description' => $_POST['description'],
                    'owner_name' => $_POST['owner_name'],
                    'email' => $_POST['email'],
                    'website' => $_POST['website'],
                    'category' => $_POST['category'],
                    'images' => $_FILES['image']['name']
                ];
                $this->db->insert('biz',$data);
                redirect('admin/add_biz');
                $this->session->set_flashdata('msg', 'Business successfully inserted');
             }
             }
        else{
        $this->load->view('admin/include/header');
        $this->load->view('admin/add_biz',$data);
        $this->load->view('admin/include/footer');
        }
    }

    public function biz(){

        $data['business'] = $this->db->get('biz')->result();
        $this->load->view('admin/include/header');
        $this->load->view('admin/manage_biz',$data);
        $this->load->view('admin/include/footer');
    }

}


