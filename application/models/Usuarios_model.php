<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Usuarios_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function ultimo_id()
    {
        return $this->db->insert_id();
    }

    public function error_consulta()
    {
        return $this->db->error();
    }

    public function usuario_por_id($usuarios_id = 0)
    {
        $obj = null;
        $q = $this->db->where('usuarios_id', $usuarios_id)->get('usuarios');
        if ($q->num_rows() > 0) {
            $obj = $q->row();
        }
        return $obj;
    }

    public function usuarios_todos_habiles()
    {
        $res = array();
        $q = $this->db->where('estatus', 1)->order_by('usuarios_id')->get('usuarios');
        if ($q->num_rows() > 0) {
            $res = $q->result();
        }
        return $res;
    }

    public function usuarios_todos()
    {
        $res = array();
        $q = $this->db->order_by('estatus DESC, usuarios_id ASC')->get('usuarios');
        if ($q->num_rows() > 0) {
            $res = $q->result();
        }
        return $res;
    }

    public function insertar_usuario($data = array())
    {
        return $this->db->insert('usuarios', $data);
    }

    public function editar_usuario($data = array())
    {
        return $this->db->update('usuarios', $data, array('usuarios_id' => $data['usuarios_id']));
    }
}