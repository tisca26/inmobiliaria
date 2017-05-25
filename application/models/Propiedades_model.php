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
        if ($q->num_rows() > 0){
            $res = $q->result();
        }
        return $res;
    }
}