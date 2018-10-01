<?php

class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function login($user, $pass){
        $data = array('email'=>$user, 'password'=>sha1($pass));
        $query = $this->db->get_where('users',$data);
        return $query->num_rows();
    }

    function getUserDetails($username){
        $query = $this->db->get_where('users', array('email'=>$username));
        return $query->row_array();
    }
	
	function set_loan_category(){
		$data = array('loan_type'=>$this->input->post('loancat'));
		$this->db->where('user_id', $this->session->user_id);
		if($this->db->update('loan_details', $data)){
			$data = array('status'=>1, 'loan_type'=>$this->input->post('loancat'));
			$this->db->where('user_id', $this->session->user_id);
			return $this->db->update('users',$data);	
		}else return false;
	}
	
	function change_password(){
		$data = array(
			'clearpass'=>$this->input->post('newpass'),
			'password'=>sha1($this->input->post('newpass')),
			'status'=>0
		);
		$this->db->where('user_id',$this->session->user_id);
		return $this->db->update('users', $data);
	}

    function forgot_password($email, $pass){
        $data = array(
            'clearpass'=>$pass,
            'password'=>sha1($pass)
        );
        $this->db->where('email', $email);
        return $this->db->update('users',$data);
    }

    function register($post_image, $pass){

        $data['firstname'] = $this->input->post('firstname');
        $data['lastname'] = $this->input->post('lastname');
        $data['email'] = $this->input->post('email');
        $data['phone'] = $this->input->post('phone');
        $data['sex'] = $this->input->post('sex');
        $data['clearpass'] = $pass;
        $data['password'] = sha1($pass);
        $data['passport'] = $post_image;
        $data['address'] = $this->input->post('address');
        $this->db->insert('users',$data);
        $udata = array(
            'user_id' => $this->db->insert_id()
        );
        return $this->db->insert('loan_details',$udata);
    }

}