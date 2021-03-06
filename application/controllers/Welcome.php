<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->load->view('welcome_message');
		$this->load->view('Home/index');
	}

	public function Kontak()
	{
		$this->load->view('Home/kontak');
	}

	public function Tentang()
	{
		$this->load->view('Home/tentang');
	}
	public function Daftarakun()
	{	

		$this->load->view('_Template/head');
		$this->load->view('_Template/hometopbar');
		$this->load->view('_Template/pendaftaran_user');
		$this->load->view('_Template/footer');
		// $this->load->view('Home/daftarakun');
	}
}
