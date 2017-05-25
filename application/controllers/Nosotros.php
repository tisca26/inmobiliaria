<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Nosotros extends CI_Controller
{
    public function index()
    {
        $this->cargar_idioma->carga_lang('nosotros/nosotros_index');
        $this->load->view('nosotros/nosotros_index');
    }
}