<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Propiedades_model extends CI_Model
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

    public function propiedad_por_id($propiedades_id = 0)
    {
        $obj = null;
        $q = $this->db->where('propiedades_id', $propiedades_id)->get('propiedades');
        if ($q->num_rows() > 0) {
            $obj = $q->row();
        }
        return $obj;
    }

    public function propiedad_por_id_completo($propiedades_id = 0)
    {
        $obj = null;
        $q = $this->db->where('propiedades_id', $propiedades_id)->get('v_propiedades_completo');
        if ($q->num_rows() > 0) {
            $obj = $q->row();
        }
        return $obj;
    }

    public function propiedades_destacadas()
    {
        $res = array();
        $q = $this->db->where('destacada', 1)->get('propiedades');
        if ($q->num_rows() > 0) {
            $res = $q->result();
        }
        return $res;
    }

    public function propiedades_pagina_inicio()
    {
        $res = array();
        $q = $this->db->where('pagina_inicio', 1)->get('v_propiedades_completo');
        if ($q->num_rows() > 0) {
            $res = $q->result();
        }
        return $res;
    }

    public function propiedades_oferta_especial()
    {
        $res = array();
        $q = $this->db->where('oferta_especial', 1)->get('propiedades');
        if ($q->num_rows() > 0) {
            $res = $q->result();
        }
        return $res;
    }

    public function cuantas_destacadas()
    {
        $res = 0;
        $q = $this->db->where('destacada', 1)->get('propiedades');
        $res = $q->num_rows();
        return $res;
    }

    public function cuantas_pagina_inicio()
    {
        $res = 0;
        $q = $this->db->where('pagina_inicio', 1)->get('propiedades');
        $res = $q->num_rows();
        return $res;
    }

    public function cuantas_oferta_especial()
    {
        $res = 0;
        $q = $this->db->where('oferta_especial', 1)->get('propiedades');
        $res = $q->num_rows();
        return $res;
    }

    public function cuantas_propiedades()
    {
        $res = 0;
        $q = $this->db->get('v_propiedades_completo');
        $res = $q->num_rows();
        return $res;
    }

    public function propiedades_todas($limit = 10, $offset = 0)
    {
        $res = array();
        $q = $this->db->limit($limit, $offset)->order_by('propiedades_id DESC')->get('v_propiedades_completo');
        if ($q->num_rows() > 0) {
            $res = $q->result();
        }
        return $res;
    }

    public function ubicaciones_distintas()
    {
        $res = array();
        $q = $this->db->group_by('estado')->order_by('estado ASC')->get('propiedades');
        if ($q->num_rows() > 0) {
            $res = $q->result();
        }
        return $res;
    }

    public function max_cuartos()
    {
        $res = null;
        $this->db->select_max('cuartos');
        $q = $this->db->get('propiedades');
        if ($q->num_rows() > 0) {
            $res = $q->row();
        }
        return $res;
    }

    public function max_precio()
    {
        $res = null;
        $this->db->select_max('precio_publico');
        $q = $this->db->get('propiedades');
        if ($q->num_rows() > 0) {
            $res = $q->row();
        }
        return $res;
    }

    public function propiedades_filtros($limit = 10, $offset = 0, $tipo_propiedad = '', $ubicacion = '', $cuartos = '', $precio_min = '', $precio_max = '')
    {
        $res = array();
        if ($tipo_propiedad != '') {
            $this->db->where('tipo_propiedad_id', $tipo_propiedad);
        }
        if ($ubicacion != ''){
            $this->db->where('estado', $ubicacion);
        }
        if ($cuartos != ''){
            $this->db->where('cuartos', $cuartos);
        }
        if ($precio_min != ''){
            $this->db->where('precio_publico >=', $precio_min);
        }
        if ($precio_max != ''){
            $this->db->where('precio_publico <=', $precio_max);
        }
        $q = $this->db->limit($limit, $offset)->order_by('propiedades_id DESC')->get('v_propiedades_completo');
        if ($q->num_rows() > 0) {
            $res = $q->result();
        }
        return $res;
    }

}