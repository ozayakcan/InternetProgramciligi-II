<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Form_Model");
	}

	public function index()
	{
		$this->load->view('form_view');
	}
	public function insert()
	{
		$data = array(
			"ad_soyad"      => $this->input->post("ad_soyad"),
			"eposta"     => $this->input->post("eposta"),
			"mesaj"   => $this->input->post("mesaj")
		);
		$insert = $this->Form_Model->insert($data);
		if ($insert) {
			redirect(base_url("form/list"));
		} else {
			redirect(base_url("form"));
		}
	}
	public function update($id)
	{
		$data = array(
			"ad_soyad"      => $this->input->post("ad_soyad"),
			"eposta"     => $this->input->post("eposta"),
			"mesaj"   => $this->input->post("mesaj")
		);
		$update = $this->Form_Model->update($id, $data);
		if ($update) {
			redirect(base_url("form/list"));
		} else {
			redirect(base_url("form/list"));
		}
	}
	public function delete($id)
	{
		$delete = $this->Form_Model->delete($id);
		if ($delete) {
			redirect(base_url("form/list"));
		} else {
			redirect(base_url("form/list"));
		}
	}
	public function list()
	{
		$items = $this->Form_Model->getAll();
		$viewData = array(
			"items" => $items,
		);
		$this->load->view("list", $viewData);
	}
}
