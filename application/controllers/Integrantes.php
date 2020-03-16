<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Integrantes extends CI_Controller {
	
	function __construct() {
        parent::__construct();
        
		$this->load->model('login_model','',TRUE);

	}	

	
	public function index($id=null)
	
	{
		redirect('auth/entrar');
	}
	
	
	public function lista($id=null)
	
	{
		$this->login_model->verifica_sessao();
		$query['sysname'] =  $this->login_model->sysname();
		$query['appname'] = 'Integrantes';
		$query['msg'] = $id;
		$this->db->select('*');
		$query['query'] = $this->db->get('integrantes')->result();
		$this->load->view('layout/header', $query); 
		$this->load->view('app/integrantes/lista', $query);
		//$this->load->view('layout/datatablejs');
		$this->load->view('layout/footer');
	}
	
	public function add_integrante()
	
	{	
			
		$email = $this->input->post('email');

		$data = $this->input->post();

		$data['criado'] = date('d/m/Y H:i');
		$data['log_criacao'] = 'Registrado em '.date('d-m-Y H:i').' Pelo responsàvel: '.$this->session->nome;		
		$data['status'] = 'ATIVO';
		
		$this->db->where('email',$email);
		$query = $this->db->get('integrantes');
		
		if($query->num_rows()>0){
			redirect('integrantes/lista/erro');
			}
		else {
			$this->db->insert('integrantes', $data);
			redirect('integrantes/lista/novo_sucesso');
		};
		
	}
	
	public function editar_integrante($id=null,$mid=null)
	
	{
		$this->login_model->verifica_sessao();
		$query['sysname'] =  $this->login_model->sysname();
		$query['appname'] = 'Dados do Integrante';
		$this->db->where('integrantesid', $id);
		$query['query'] = $this->db->get('integrantes')->result();

		$query['msg'] = $mid;
		$this->load->view('layout/header', $query);
		$this->load->view('app/integrantes/edit', $query);
		$this->load->view('layout/footer');
	}
	
	public function upd_integrante()
	
	{	
		$uid =  $this->input->post('integrantesid');

		$data = $this->input->post();

		$data['log_alteracao'] = 'Alterado em '.date('d-m-Y H:i').' Pelo responsàvel: '.$this->session->nome;	
		
		
		$this->db->where('integrantesid', $uid);
		if($this->db->update('integrantes', $data)){
			redirect('integrantes/lista/sucesso_update');
		}
		else{};
		
	}
	public function delete($id)
	
	{
		$this->db->where('integrantesid', $id);
		$this->db->delete('integrantes');
		echo 'Deleted successfully.';
	}
	
	public function buscar($id)
	
	{

		$this->db->where('integrantesid', $id);
		$query = $this->db->get('integrantes')->result();
		
		$data = array('nome'=> $query[0]->nome,
					 );
		
		
			header('Content-Type: application/json');
	 		echo json_encode($data);
	}
	public function update_foto()
	
	{	
		
		$foto    = $_FILES['foto'];
    	$configuracao = array(
        'upload_path'   => realpath('./public/uploads/integrantes'),
        'allowed_types' => 'gif|jpg|png|jpeg',
		'file_name'     => md5($this->input->post('foto')),
		'max_size'      => '100000000'
	   	);      
	    $this->load->library('upload');
	    $this->upload->initialize($configuracao);
			
//		var_dump($foto);
			
		if ($this->upload->do_upload('foto')){
                        
			$upload_data = $this->upload->data();
				  

					
			$uid =  $this->input->post('integrantesid');
			$data = array('foto' => $upload_data['file_name']);


			$this->db->where('integrantesid', $uid);
			
			  if($this->db->update('integrantes', $data)){
									redirect('integrantes/editar_integrante/'.$uid.'/update');
								}
			  }else{
				  redirect('integrantes/lista/erro');
				  
			  }
		
	}
}
