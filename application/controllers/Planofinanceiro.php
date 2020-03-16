<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Planofinanceiro extends CI_Controller
{
    
	function __construct() {
        parent::__construct();
        
		$this->load->model('login_model','',TRUE);

	}	

  public function index()
  {
    $this->login_model->verifica_sessao();
    echo 'TEST';
  }
  public function lista($id=null)
	{
		$this->login_model->verifica_sessao();
		$query['sysname'] =  $this->login_model->sysname();
		$query['msg'] = $id;
		$query['appname'] = 'Financeiro';
		$this->db->select('*');
		$query['query'] = $this->db->get('planofinanceiro')->result();
		$this->load->view('layout/header', $query);
		$this->load->view('app/planofinanceiro/lista', $query);
		$this->load->view('layout/footer');
	}

}

