<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Agentes_model extends CI_Model
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

    public function agente_por_id($agentes_id = 0)
    {
        $obj = null;
        $q = $this->db->where('agentes_id', $agentes_id)->get('agentes');
        if ($q->num_rows() > 0) {
            $obj = $q->row();
        }
        return $obj;
    }

    public function agentes_todos_habiles()
    {
        $res = array();
        $q = $this->db->where('estatus', 1)->order_by('agentes_id')->get('agentes');
        if ($q->num_rows() > 0) {
            $res = $q->result();
        }
        return $res;
    }

    public function agentes_todos()
    {
        $res = array();
        $q = $this->db->order_by('estatus DESC, agentes_id ASC')->get('agentes');
        if ($q->num_rows() > 0) {
            $res = $q->result();
        }
        return $res;
    }

    public function insertar_agente($data = array())
    {
        return $this->db->insert('agentes', $data);
    }

    public function editar_agente($data = array())
    {
        return $this->db->update('agentes', $data, array('agentes_id' => $data['agentes_id']));
    }
}