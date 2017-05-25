<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Estatus_propiedades_model extends CI_Model
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

    public function insertar_estatus($data = array())
    {
        return $this->db->insert('estatus_propiedades', $data);
    }
}