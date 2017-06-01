<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Catalogos
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('tipo_propiedad_model');
    }

    public function tipos_propiedades($order_by = 'tipo_propiedad_id', $dir_order = 'ASC')
    {
        return $this->CI->tipo_propiedad_model->tipos_todos($order_by, $dir_order);
    }

    public function tipos_propiedades_array($order_by = 'tipo_propiedad_id', $dir_order = 'ASC')
    {
        $res = array();
        $tipos = $this->tipos_propiedades($order_by, $dir_order);
        foreach ($tipos as $tipo) {
            $res[$tipo->tipo_propiedad_id] = $tipo->nombre;
        }
        return $res;
    }

    public function cat_paises()
    {
        $res = array();
        $q = $this->CI->db->order_by('nombre')->get('cat_paises');
        if ($q->num_rows() > 0) {
            $res = $q->result();
        }
        return $res;
    }
    public function cat_estados()
    {
        $res = array();
        $q = $this->CI->db->order_by('nombre')->get('cat_estados');
        if ($q->num_rows() > 0) {
            $res = $q->result();
        }
        return $res;
    }
    public function cat_municipios()
    {
        $res = array();
        $q = $this->CI->db->order_by('nombre')->get('cat_municipios');
        if ($q->num_rows() > 0) {
            $res = $q->result();
        }
        return $res;
    }

    public function cat_estados_por_pais_id($pais_id = 0)
    {
        $res = array();
        $q = $this->CI->db->where('cat_paises_id', $pais_id)->order_by('nombre')->get('cat_estados');
        if ($q->num_rows() > 0) {
            $res = $q->result();
        }
        return $res;
    }

    public function cat_municipos_por_estado_id($estado_id = 0)
    {
        $res = array();
        $q = $this->CI->db->where('cat_estados_id', $estado_id)->order_by('nombre')->get('cat_municipios');
        if ($q->num_rows() > 0) {
            $res = $q->result();
        }
        return $res;
    }

    public function estatus_propiedad()
    {
        $res = array();
        $q = $this->CI->db->order_by('nombre')->get('estatus_propiedad');
        if ($q->num_rows() > 0) {
            $res = $q->result();
        }
        return $res;
    }
}