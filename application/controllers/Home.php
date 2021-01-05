<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$user = $this->session->userdata('admin');
		$this->data['user'] = $this->db->where(['contact = '=>$user])->get('account')->row();
        
    }

	public function index()
	{

		$this->data['category'] = $this->db->get('category')->result();
		$this->data['popular'] = $this->db->limit('4')->get('biz')->result();
		//$data['popular'] = $this->db->order_by('id','desc')->get('biz')->result();
		$this->data['business'] = $this->db->order_by('id','desc')->join('category','category.cat_id = biz.category')->get('biz')->result();
		$this->load->view('public/index',$this->data);
	}

	public function biz($id){
		$this->data['business'] = $this->db->get_where('biz',['slug ='=>$id])->row();
		$this->data['related'] = $this->db->get_where('biz',['slug !='=>$id])->result();
		$this->load->view('public/include/header',$this->data);
		$this->load->view('public/biz',$this->data);
		$this->load->view('public/include/footer');
	}
}
