<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller
{
    public function index()
    {
        $this->load->library('business/Propiedad');
        $this->load->library('business/Agente');
        $propiedades_destacadas = $this->propiedad->propiedades_destacadas();
        $propiedades_pagina_inicio = $this->propiedad->propiedades_pagina_inicio();
        $propiedades_oferta_especial = $this->propiedad->propiedades_oferta_especial();
        $cuantas_destacadas = $this->propiedad->cuantas_destacadas();
        $agentes = $this->agente->agente_todos();

        $data['propiedades_destacadas'] = $propiedades_destacadas;
        $data['propiedades_pagina_inicio'] = $propiedades_pagina_inicio;
        $data['propiedades_oferta_especial'] = $propiedades_oferta_especial;
        $data['cuantas_destacadas'] = $cuantas_destacadas;
        $data['agentes'] = $agentes;

        $this->cargar_idioma->carga_lang('inicio/inicio_index');
        $this->load->view('inicio/inicio_index', $data);
    }

    public function alta_boletin()
    {
        $this->load->library('Mailchimp_lib');
        $nombre = $this->input->post('name');
        $email = $this->input->post('email');
        return $this->mailchimp_lib->alta_en_lista_json('a8a4da30d9', $email, $nombre);
    }

}