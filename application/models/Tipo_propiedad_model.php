<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tipo_propiedad_model extends CI_Model
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

    public function tipos_todos($order_by = 'tipo_propiedad_id', $dir_order = 'ASC')
    {
        $res = array();
        $q = $this->db->order_by($order_by, $dir_order)->get('tipo_propiedad');
        if ($q->num_rows() > 0){
            $res = $q->result();
        }
        return $res;
    }

}