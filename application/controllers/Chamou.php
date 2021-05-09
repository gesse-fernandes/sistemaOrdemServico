<?php
defined('BASEPATH') OR exit ('Ação não permitida');

class Chamou extends CI_Controller
{
    public function index()
    {
        $this->load->view('chamou');
    }
}