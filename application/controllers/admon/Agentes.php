<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agentes extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Auth_lib');
        $this->auth_lib->check_access();
    }

    public function index()
    {
        $this->load->library('business/Agente');
        $agentes = $this->agente->agente_todos();

        $data['agentes'] = $agentes;
        $this->load->view('admon/agentes/agentes_index', $data);
    }

    public function inhabilitar_json()
    {
        header('Content-type: application/json');
        $agentes_id = $this->input->post('agentes_id');
        echo json_encode(array('status' => 'OK', 'msg' => 'Todo bien'));
    }

    public function habilitar_json()
    {
        header('Content-type: application/json');
        $agentes_id = $this->input->post('agentes_id');
        echo json_encode(array('status' => 'OK', 'msg' => 'Todo bien'));
    }

    public function editar($agentes_id = 0)
    {
        if (!valid_id($agentes_id)) {
            redirect('admon/agentes');
        }
        $this->load->library('business/Agente');
        $agente = $this->agente->agente_por_id($agentes_id);

        $data['agente'] = $agente;
        $this->load->view('admon/agentes/agentes_editar', $data);
    }

    public function edicion()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('agentes_id', 'Agente Inválido', 'is_natural_no_zero|required');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]');
        $this->form_validation->set_rules('apellido_paterno', 'Apellido Paterno', 'required|min_length[3]');
        $this->form_validation->set_rules('apellido_materno', 'Apellido Materno', 'required|min_length[3]');
        $this->form_validation->set_rules('tel_movil', 'Móvil', 'required|min_length[10]');
        $this->form_validation->set_rules('tel_fijo', 'Fijo', 'min_length[8]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('descripcion_es', 'Descripción ES', 'required|trim');
        $this->form_validation->set_rules('descripcion_en', 'Descripción EN', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->editar($this->input->post('agentes_id'));
        } else {
            $this->load->library('business/Agente');
            $agente_dto = $this->input->post();
            $agente_dto['estatus'] = isset($agente_dto['estatus']) ? (bool)$agente_dto['estatus'] : '0';
            unset($agente_dto['img_profile']);
            if ($_FILES AND $_FILES['img_profile']['name']) {
                $this->load->library('upload', $this->_upload_config($agente_dto['agentes_id']));
                if (!$this->upload->do_upload('img_profile')) {
                    $error = array('error' => $this->upload->display_errors());
                    set_bootstrap_alert('Error al guardar al agente (imagen):', BOOTSTRAP_ALERT_DANGER);
                    set_bootstrap_alert($error, BOOTSTRAP_ALERT_DANGER);
                    redirect('admon/agentes/editar/' . $agente_dto['agentes_id']);
                }
                $agente_dto['img_profile'] = base_url("assets/img/agentes/" . $agente_dto['agentes_id'] . "/" . $this->upload->data('file_name'));
            }
            if ($this->agente->editar_agente($agente_dto)) {
                set_bootstrap_alert('Se guardó el agente con éxito', BOOTSTRAP_ALERT_SUCCESS);
                redirect('admon/agentes');
            } else {
                set_bootstrap_alert('Error al guardar al agente', BOOTSTRAP_ALERT_DANGER);
                redirect('admon/agentes/editar/' . $agente_dto['agentes_id']);
            }
        }
    }

    private function _upload_config($nombre = '0')
    {
        if (!file_exists(FCPATH . "assets/img/agentes/$nombre")) {
            mkdir(FCPATH . "assets/img/agentes/$nombre", 0777, true);
        }
        $config['upload_path'] = FCPATH . "assets/img/agentes/$nombre/";
        $config['file_name'] = "$nombre";
        $config['overwrite'] = true;
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        return $config;
    }
}