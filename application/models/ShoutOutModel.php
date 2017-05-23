<?php

class ShoutOutModel extends CI_Model
{


	public $to;
	public $from;
	public $message;


	public function __construct()
	{
		parent::__construct();
	}

	public function form_insert($data)
	{
		$this->db->insert('shout_out', $data);
	}

	public function getShoutOuts()
	{
		$this->db->order_by("id", "desc");
		$query = $this->db->get('shout_out', 10);
		$result = $query->result();
		return $result;
	}

	public function getNextShoutOut()
	{
		$this->db->order_by("counter asc,id asc");
		$query = $this->db->get('shout_out', 1);
		$result = $query->result();


		$counter = $result[0]->counter + 1;
		$id = $result[0]->id;

		$data = array('counter' => $counter);
		$this->db->where('id', $id);
		$this->db->update('shout_out', $data);

		return $result;
	}

}
