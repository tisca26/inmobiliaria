<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Propiedades extends CI_Controller
{
    public function index()
    {
        $this->cargar_idioma->carga_lang('propiedades/propiedades_index');
        $this->load->view('propiedades/propiedades_index');
    }

    public function ver($propiedad_id = 0)
    {
        $this->cargar_idioma->carga_lang('propiedades/propiedades_ver');
        $this->load->view('propiedades/propiedades_ver');
    }
}