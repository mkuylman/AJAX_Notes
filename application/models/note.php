<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Note extends CI_Model {
  public function all() {
    return $this->db->query("SELECT * FROM notes")->result_array();
  }
}
