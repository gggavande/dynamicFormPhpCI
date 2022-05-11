<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function getJson(){
		// print_r($_FILES); exit;
		$string = file_get_contents($_FILES['jsonFile']['tmp_name']);
		$jsonData = json_decode($string);
		$data['jsonData'] = $jsonData->fields;
		/*foreach ($jsonData->fields as $key => $value) {
			print_r($value);
			echo "<br><br><br><br>===================";
		}
		exit;*/
		$this->load->view('generate_form',$data);
	}

	public function saveJson(){
		/*echo "<pre>";
		print_r($_POST);*/
		$data['post'] = $_POST;
		$this->load->view('data',$data);
	}
}
