<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Socios extends CI_Controller {
	
	function baja($id){

		if ($baja) {
			$this->Socio->baja($baja);
		} else {
			$this->load->view->('admin/socios/confirmar',$id);
		}
	}  
	
}
