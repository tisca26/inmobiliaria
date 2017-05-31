<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Usuario
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('usuarios_model');
    }

    public function ultimo_id()
    {
        return $this->CI->usuarios_model->ultimo_id();
    }

    public function error_consulta()
    {
        return $this->CI->usuarios_model->error_consulta();
    }

    public function usuario_por_id($usuarios_id = 0)
    {
        $age = $this->CI->usuarios_model->usuario_por_id($usuarios_id);
        return $age;
    }

    public function usuario_todos()
    {
        $usuarios = $this->CI->usuarios_model->usuarios_todos();
        return $usuarios;
    }

    public function insertar_usuario($usuario = array())
    {
        return $this->CI->usuarios_model->insertar_usuario($usuario);
    }

    public function editar_usuario($usuario = array())
    {
        return $this->CI->usuarios_model->editar_usuario($usuario);
    }
}