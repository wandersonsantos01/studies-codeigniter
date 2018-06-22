<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teste extends CI_Controller {

	
	function __construct(){
		parent::__construct();

		$this->load->model('Teste3_model', 'apelido_teste3');
	}

	public function index(){
		// echo 'São exatamente: ' . date('Y-d-m H:i:s');

		$dados['TITULO']	= 'Primeira view CI de exemplo !!!';
		$dados['CONTEUDO']	= 'Bla bla bla BLA BLA BLA';

		$this->load->view('teste',$dados);
	}

	public function teste2(){
		echo 'Teste 2';

		echo '<hr />';

		echo $this->uri->segment(3);
	}

	public function teste3(){
		$params = $this->uri->segment(3);
		$this->apelido_teste3->salvar($params);
	}
}
