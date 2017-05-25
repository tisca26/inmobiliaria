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

    public function agentes_todos()
    {
        $res = array();
        $q = $this->db->order_by('agentes_id')->get('agentes');
        if ($q->num_rows() > 0){
            $res = $q->result();
        }
        return $res;
    }
}