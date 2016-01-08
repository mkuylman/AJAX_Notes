<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller { 
  public function index_json()
  {
  	$this->load->model("Note");
  	$data["notes"] = $this->Note->all();
  	echo json_encode($data);
  }

  public function index_html()
  {
    $this->load->model("Note");
    $data["notes"] = $this->Note->all();
    $this->load->view("partials/index", $data);
  }

  public function index()
  {
    $this->load->view('mains/index');
  }
}

//end of main controller