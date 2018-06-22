<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teste3_model extends CI_Model {

	
	function __construct(){
		// parent::__construct();
	}

	
	public function salvar($param){
		echo 'Executado método salvar do MODEL :: ' . $param ;
	}
}
