<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Propiedades extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    private function _prepara_paginacion($base_url = '', $total_filas = 0, $total_pagina = 0)
    {
        $this->load->library('pagination');
        $config['base_url'] = $base_url;
        $config['total_rows'] = $total_filas;
        $config['per_page'] = $total_pagina;
        $config['first_link'] = trans_line('primero');
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = trans_line('ultimo');
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['prev_link'] = '<i class="fa fa-chevron-left"></i>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '<i class="fa fa-chevron-right"></i>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        return $this->pagination->create_links();
    }

    public function index()
    {
        del_attr_session('busqueda_dto');
        $this->cargar_idioma->carga_lang('propiedades/propiedades_index');
        $this->load->library('business/Propiedad');
        $prop_a_mostrar = 6;
        $cuantas_propiedades = $this->propiedad->cuantas_propiedades();
        $propiedades = $this->propiedad->propiedades_todas($prop_a_mostrar, 0);

        // PAGINACION INICIO
        $links_paginacion = $this->_prepara_paginacion(base_url_lang_slash() . 'propiedades/pag/', $cuantas_propiedades, $prop_a_mostrar);
        // PAGINACION FINAL

        $data['cuantas_propiedades'] = $cuantas_propiedades;
        $data['propiedades'] = $propiedades;
        $data['links_paginacion'] = $links_paginacion;
        $this->load->view('propiedades/propiedades_index', $data);
    }

    public function pag($offset = 0)
    {
        $this->cargar_idioma->carga_lang('propiedades/propiedades_index');
        $this->load->library('business/Propiedad');
        $prop_a_mostrar = 6;
        $propiedades = $this->propiedad->propiedades_filtros($prop_a_mostrar, $offset, $this->session->userdata('busqueda_dto'));
        $cuantas_propiedades = count($propiedades);
        if ($cuantas_propiedades < 1){
            set_bootstrap_alert(trans_line('alerta_sin_resultados'), BOOTSTRAP_ALERT_INFO);
        }
        // PAGINACION INICIO
        $links_paginacion = $this->_prepara_paginacion(base_url_lang_slash() . 'propiedades/pag/', $cuantas_propiedades, $prop_a_mostrar);
        // PAGINACION FINAL

        $data['cuantas_propiedades'] = $cuantas_propiedades;
        $data['propiedades'] = $propiedades;
        $data['links_paginacion'] = $links_paginacion;
        $this->load->view('propiedades/propiedades_index', $data);
    }

    public function ver($propiedad_id = '')
    {
        if (!is_numeric($propiedad_id)) {
            redirect('propiedades');
        }
        $this->load->library('business/Propiedad');
        $propiedad = $this->propiedad->propiedad_por_id_completo($propiedad_id);
        $propiedad_imgs = $this->propiedad->imagenes_por_propiedad_id($propiedad_id);
        $data['propiedad'] = $propiedad;
        $data['propiedad_imgs'] = $propiedad_imgs;
        $this->cargar_idioma->carga_lang('propiedades/propiedades_ver');
        $this->load->view('propiedades/propiedades_ver', $data);
    }

    public function buscar()
    {
        $this->load->library('form_validation');
        $this->cargar_idioma->carga_lang('propiedades/propiedades_index');
        $this->form_validation->set_rules('propertiesPropertyType', trans_line('buscador_tipo_propiedad'), 'is_natural_no_zero');
        $this->form_validation->set_rules('propertiesLocation', trans_line('buscador_estado'), 'min_length[3]');
        $this->form_validation->set_rules('propertiesMinBeds', trans_line('buscador_cuartos'), 'is_natural');
        $this->form_validation->set_rules('propertiesMinPrice', trans_line('buscador_precio_min'), 'is_natural');
        $this->form_validation->set_rules('propertiesMaxPrice', trans_line('buscador_precio_max'), 'is_natural');
        if ($this->form_validation->run() == FALSE) {
            $this->pag(0);
        }else{
            $busqueda_dto = new stdClass();
            $busqueda_dto->tipo_propiedad = $this->input->post('propertiesPropertyType');
            $busqueda_dto->ubicacion = $this->input->post('propertiesLocation');
            $busqueda_dto->cuartos = $this->input->post('propertiesMinBeds');
            $busqueda_dto->min_precio = $this->input->post('propertiesMinPrice');
            $busqueda_dto->max_precio = $this->input->post('propertiesMaxPrice');
            $this->session->set_userdata('busqueda_dto', $busqueda_dto);
            $this->pag(0);
        }
    }
}