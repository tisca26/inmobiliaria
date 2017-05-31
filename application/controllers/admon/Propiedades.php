<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Propiedades extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Auth_lib');
        $this->auth_lib->check_access();
    }

    public function index()
    {
        $this->load->library('business/Propiedad');
        $propiedades = $this->propiedad->propiedades_todas(0);
        $data['propiedades'] = $propiedades;
        $this->load->view('admon/propiedades/propiedades_index', $data);
    }

}