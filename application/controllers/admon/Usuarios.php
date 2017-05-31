<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Usuarios extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Auth_lib');
        $this->auth_lib->check_access();
    }

    public function index()
    {
        $this->load->library('business/Usuario');
        $usuarios = $this->usuario->usuario_todos();

        $data['usuarios'] = $usuarios;
        $this->load->view('admon/usuarios/usuarios_index', $data);
    }

    public function inhabilitar_json()
    {
        header('Content-type: application/json');
        $usuario['usuarios_id'] = $this->input->post('usuarios_id');
        $usuario['estatus'] = 0;
        $this->load->library('business/Usuario');
        $this->usuario->editar_usuario($usuario);
        echo json_encode(array('status' => 'OK', 'msg' => 'Todo bien ' . $usuario['usuarios_id']));
    }

    public function habilitar_json()
    {
        header('Content-type: application/json');
        $usuario['usuarios_id'] = $this->input->post('usuarios_id');
        $usuario['estatus'] = 1;
        $this->load->library('business/Usuario');
        $this->usuario->editar_usuario($usuario);
        echo json_encode(array('status' => 'OK', 'msg' => 'Todo bien ' . $usuario['usuarios_id']));
    }

    public function editar($usuarios_id = 0)
    {
        if (!valid_id($usuarios_id)) {
            redirect('admon/usuarios');
        }
        $this->load->library('business/Usuario');
        $usuario = $this->usuario->usuario_por_id($usuarios_id);

        $data['usuario'] = $usuario;
        $this->load->view('admon/usuarios/usuarios_editar', $data);
    }

    public function edicion()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('usuarios_id', 'Usuario Inválido', 'is_natural_no_zero|required');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]');
        $this->form_validation->set_rules('apellidos', 'Apellidos', 'required|min_length[3]');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == FALSE) {
            $this->editar($this->input->post('usuarios_id'));
        } else {
            $this->load->library('business/Usuario');
            $usuario_dto = $this->input->post();
            $usuario_dto['estatus'] = isset($usuario_dto['estatus']) ? (bool)$usuario_dto['estatus'] : '0';
            if ($usuario_dto['password'] != ''){
                if ($usuario_dto['password'] === $usuario_dto['repassword']){
                    $opciones = [
                        'cost' => 10,
                    ];
                    $pass = password_hash($usuario_dto['password'], PASSWORD_BCRYPT, $opciones);
                    $usuario_dto['pass'] = $pass;
                }
            }
            unset($usuario_dto['password']);
            unset($usuario_dto['repassword']);
            if ($this->usuario->editar_usuario($usuario_dto)) {
                set_bootstrap_alert('Se guardó el usuario con éxito', BOOTSTRAP_ALERT_SUCCESS);
                redirect('admon/usuarios');
            } else {
                set_bootstrap_alert('Error al guardar al usuario', BOOTSTRAP_ALERT_DANGER);
                redirect('admon/usuarios/editar/' . $usuario_dto['usuarios_id']);
            }
        }
    }

    public function insertar()
    {
        $this->load->view('admon/usuarios/usuarios_insertar');
    }

    public function insercion()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]');
        $this->form_validation->set_rules('apellidos', 'Apellidos', 'required|min_length[3]');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == FALSE) {
            $this->insertar();
        } else {
            $this->load->library('business/Usuario');
            $usuario_dto = $this->input->post();
            $usuario_dto['estatus'] = isset($usuario_dto['estatus']) ? (bool)$usuario_dto['estatus'] : '0';
            $opciones = ['cost' => 10];
            $pass = password_hash($usuario_dto['password'], PASSWORD_BCRYPT, $opciones);
            $usuario_dto['pass'] = $pass;
            unset($usuario_dto['password']);
            unset($usuario_dto['repassword']);
            if ($this->usuario->insertar_usuario($usuario_dto)) {
                set_bootstrap_alert('Se guardó el usuario con éxito', BOOTSTRAP_ALERT_SUCCESS);
                redirect('admon/usuarios');
            } else {
                set_bootstrap_alert('Error al guardar al usuario', BOOTSTRAP_ALERT_DANGER);
                $this->insertar();
            }
        }
    }
}