<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller
{
    public function index()
    {
        $this->cargar_idioma->carga_lang('contacto/contacto_index');
        $this->load->view('contacto/contacto_index');
    }

    public function enviar_correo()
    {
        $this->load->library('Correo');
        $asunto = 'Solicitud de información';
        $nombre = $this->input->post('name');
        $email = $this->input->post('email');
        $tel = $this->input->post('telefono');
        $mensaje = $this->input->post('message');
        $data['nombre'] = $nombre;
        $data['email'] = $email;
        $data['telefono'] = $tel;
        $data['mensaje'] = $mensaje;
        $cuerpo_correo = $this->load->view('contacto/contacto_correo_a_ventas', $data, TRUE);
        return $this->correo->enviar_correo_json(EMPRESA_MAIL, $asunto, $cuerpo_correo);

    }
}