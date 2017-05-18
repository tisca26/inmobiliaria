<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller
{
    public function index()
    {
        $this->cargar_idioma->carga_lang('inicio/inicio_index');
        $this->load->view('inicio/inicio_index');
    }

}