<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
function __construct(){
		parent::__construct();
      $this->load->model('m_kontak');
      $this->load->model('m_pengunjung');
      $this->load->model('m_kontakkami');
  		$this->m_pengunjung->count_visitor();
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		           $this->data['main_view']   = 'depan/v_contact';
            $this->data['title']  = 'Kontak Kami';
            $this->data['kontakkami']=$this->m_kontakkami->get_kontakkami_home();
		$this->data['main_view'] = 'depan/v_kontak';
		$this->load->view('template/template', $this->data);
	}
}
