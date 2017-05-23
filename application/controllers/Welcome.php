<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('ShoutOutModel');
	}


	public function index()
	{

		$this->load->database();

		$next_shout_out = $this->ShoutOutModel->getNextShoutOut();

		$data = array(
			'next_shout_out' => $next_shout_out
		);


		$this->load->view('front_end', $data);
	}

	public function add_shout_out()
	{

		$this->load->database();

		$past_shout_outs = $this->ShoutOutModel->getShoutOuts();

		$data = array(
			'past_shout_outs' => $past_shout_outs
		);

		$this->load->view('back_end', $data);
	}

	public function process_shout_out()
	{
		$this->load->database();

		$data = array(
			'to' => $this->input->post('to'),
			'from' => $this->input->post('from'),
			'message' => $this->input->post('message'),
		);

		$this->ShoutOutModel->form_insert($data);
		$data['message'] = 'Data Inserted Successfully';

		$past_shout_outs = $this->ShoutOutModel->getShoutOuts();
		$data['past_shout_outs'] = $past_shout_outs;

		$this->load->view('back_end', $data);

	}
}
