<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agentes extends CI_Controller
{
    public function index()
    {
        $this->load->library('business/Agente');
        $agentes = $this->agente->agente_todos();

        $data['agentes'] = $agentes;

        $this->cargar_idioma->carga_lang('agentes/agentes_index');
        $this->load->view('agentes/agentes_index', $data);
    }

}