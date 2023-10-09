<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		if (!empty($this->session->userdata("userStatus"))) {
			$this->load->view('layout/header');
			$this->load->view('main/dashboard');
			$this->load->view('layout/footer');
		} else {
			$this->load->view("layout/meta");
			$this->load->view('main/signIn');
		}
	}

	public function set_theme()
	{
		$theme = $this->uri->segment(2);
		if ($theme == "dark" || $theme == "light") {
			$this->session->set_userdata('userTheme', $theme);
			redirect(site_url('/'), 'refresh');
		}
	}
}