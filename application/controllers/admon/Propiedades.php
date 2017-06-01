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
        $destacadas = $this->propiedad->propiedades_destacadas();
        $ofertas = $this->propiedad->propiedades_oferta_especial();
        $iniciales = $this->propiedad->propiedades_pagina_inicio();
        $data['propiedades'] = $propiedades;
        $data['destacadas'] = $destacadas;
        $data['ofertas'] = $ofertas;
        $data['iniciales'] = $iniciales;
        $this->load->view('admon/propiedades/propiedades_index', $data);
    }

    public function editar($propiedades_id = 0)
    {
        if (!valid_id($propiedades_id)) {
            redirect('admon/propiedades');
        }
        $this->load->library('business/Catalogos');
        $this->load->library('business/Propiedad');
        $propiedad = $this->propiedad->propiedad_por_id_completo($propiedades_id);
        $data['propiedad'] = $propiedad;
        $data['cuantas_destacadas'] = $this->propiedad->cuantas_destacadas();
        $data['cuantas_pag_inicial'] = $this->propiedad->cuantas_pagina_inicio();
        $data['cuantas_oferta_esp'] = $this->propiedad->cuantas_oferta_especial();
        $data['imagenes'] = $this->propiedad->imagenes_por_propiedad_id($propiedades_id);
        $data['tipos_propiedades'] = $this->catalogos->tipos_propiedades();
        $data['estatus_props'] = $this->catalogos->estatus_propiedad();
        $data['paises'] = $this->catalogos->cat_paises();
        $data['estados'] = $this->catalogos->cat_estados();
        $data['municipios'] = $this->catalogos->cat_municipios();
        $this->load->view('admon/propiedades/propiedades_editar', $data);
    }

    public function edicion()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('propiedades_id', 'Propiedad Inválida', 'is_natural_no_zero|required');
        if ($this->form_validation->run() == FALSE) {
            $this->editar($this->input->post('propiedades_id'));
        } else {
            $this->load->library('business/Propiedad');
            $propiedad_dto = $this->input->post();
            $estatus_propiedad_id = $propiedad_dto['estatus_propiedad_id'];
            unset($propiedad_dto['estatus_propiedad_id']);
            unset($propiedad_dto['img_profile']);

            $propiedad_dto['estatus'] = isset($propiedad_dto['estatus']) ? (bool)$propiedad_dto['estatus'] : '0';
            $propiedad_dto['destacada'] = isset($propiedad_dto['destacada']) ? (bool)$propiedad_dto['destacada'] : '0';
            $propiedad_dto['pagina_inicio'] = isset($propiedad_dto['pagina_inicio']) ? (bool)$propiedad_dto['pagina_inicio'] : '0';
            $propiedad_dto['oferta_especial'] = isset($propiedad_dto['oferta_especial']) ? (bool)$propiedad_dto['oferta_especial'] : '0';

            if ($_FILES AND $_FILES['img_profile']['name']) {
                $this->_subir_fotos($propiedad_dto['propiedades_id']);
            }

            if ($this->propiedad->edita_propiedad_completo($propiedad_dto, $estatus_propiedad_id)) {
                set_bootstrap_alert('Se guardó la propiedad con éxito', BOOTSTRAP_ALERT_SUCCESS);
                redirect('admon/propiedades');
            } else {
                set_bootstrap_alert('Error al guardar la propiedad', BOOTSTRAP_ALERT_DANGER);
                redirect('admon/propiedades/editar/' . $propiedad_dto['propiedades_id']);
            }
        }
    }

    public function insertar()
    {
        $this->load->library('business/Catalogos');
        $this->load->library('business/Propiedad');
        $data['cuantas_destacadas'] = $this->propiedad->cuantas_destacadas();
        $data['cuantas_pag_inicial'] = $this->propiedad->cuantas_pagina_inicio();
        $data['cuantas_oferta_esp'] = $this->propiedad->cuantas_oferta_especial();
        $data['tipos_propiedades'] = $this->catalogos->tipos_propiedades();
        $data['estatus_props'] = $this->catalogos->estatus_propiedad();
        $data['paises'] = $this->catalogos->cat_paises();
        $this->load->view('admon/propiedades/propiedades_insertar', $data);
    }

    public function insercion()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('estatus_propiedad_id', 'Estatus de la propiedad', 'is_natural_no_zero|required');
        if ($this->form_validation->run() == FALSE) {
            $this->insertar();
        } else {
            $this->load->library('business/Propiedad');
            $propiedad_dto = $this->input->post();
            $estatus_propiedad_id = $propiedad_dto['estatus_propiedad_id'];
            unset($propiedad_dto['estatus_propiedad_id']);
            unset($propiedad_dto['img_profile']);
            $propiedad_dto['estatus'] = isset($propiedad_dto['estatus']) ? (bool)$propiedad_dto['estatus'] : '0';
            $propiedad_dto['destacada'] = isset($propiedad_dto['destacada']) ? (bool)$propiedad_dto['destacada'] : '0';
            $propiedad_dto['pagina_inicio'] = isset($propiedad_dto['pagina_inicio']) ? (bool)$propiedad_dto['pagina_inicio'] : '0';
            $propiedad_dto['oferta_especial'] = isset($propiedad_dto['oferta_especial']) ? (bool)$propiedad_dto['oferta_especial'] : '0';
            $propiedades_id = $this->propiedad->inserta_propiedad_completo($propiedad_dto, $estatus_propiedad_id);
            if ($propiedades_id != false) {
                if ($_FILES AND $_FILES['img_profile']['name']) {
                    $this->_subir_fotos($propiedades_id);
                }
                set_bootstrap_alert('Se guardó la propiedad con éxito', BOOTSTRAP_ALERT_SUCCESS);
                redirect('admon/propiedades');
            } else {
                set_bootstrap_alert('Error al guardar la propiedad', BOOTSTRAP_ALERT_DANGER);
                $this->insertar();
            }
        }

    }

    public function estados_por_pais($paises_id = 0)
    {
        $estados = array();
        if (!valid_id($paises_id)) {
            header('Content-Type: application/json');
            echo json_encode($estados);
        }
        $this->load->library('business/Catalogos');
        $estados = $this->catalogos->cat_estados_por_pais_id($paises_id);
        header('Content-Type: application/json');
        echo json_encode($estados);
    }

    public function municipios_por_estado($estados_id = 0)
    {
        $muni = array();
        if (!valid_id($estados_id)) {
            header('Content-Type: application/json');
            echo json_encode($muni);
        }
        $this->load->library('business/Catalogos');
        $muni = $this->catalogos->cat_municipos_por_estado_id($estados_id);
        header('Content-Type: application/json');
        echo json_encode($muni);
    }

    private function _subir_fotos($propiedades_id = 0)
    {
        $this->load->library('upload');

        $files = $_FILES;
        $cpt = count($_FILES['img_profile']['name']);
        for($i=0; $i<$cpt; $i++)
        {
            $_FILES['img_profile']['name']= $files['img_profile']['name'][$i];
            $_FILES['img_profile']['type']= $files['img_profile']['type'][$i];
            $_FILES['img_profile']['tmp_name']= $files['img_profile']['tmp_name'][$i];
            $_FILES['img_profile']['error']= $files['img_profile']['error'][$i];
            $_FILES['img_profile']['size']= $files['img_profile']['size'][$i];
            log_message('debug', 'Si sube imagen con nombre: ' . $_FILES['img_profile']['name']);
            $this->upload->initialize($this->_upload_config($propiedades_id));
            $this->upload->do_upload('img_profile');
        }
    }

    private function _upload_config($nombre = '0')
    {
        if (!file_exists(FCPATH . "assets/propiedades_imgs/$nombre")) {
            mkdir(FCPATH . "assets/propiedades_imgs/$nombre", 0777, true);
        }
        $config['upload_path'] = FCPATH . "assets/propiedades_imgs/$nombre/";
        $config['overwrite'] = false;
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048;
        return $config;
    }

    public function borrar_foto_json()
    {
        $foto_url = $this->input->post('url');
        $salida = array_slice(explode('/', $foto_url), -2);
        log_message('debug', "Salidas: $salida[0] y $salida[1]");
        unlink(FCPATH . 'assets/propiedades_imgs/' . $salida[0] . '/' . $salida[1]);
        header('Content-type: application/json');
        echo json_encode(array('status' => 'OK', 'msg' => 'Todo bien '));
    }

}