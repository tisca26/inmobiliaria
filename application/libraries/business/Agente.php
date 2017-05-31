<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Agente
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('agentes_model');
    }

    public function ultimo_id()
    {
        return $this->CI->agentes_model->ultimo_id();
    }

    public function error_consulta()
    {
        return $this->CI->agentes_model->error_consulta();
    }

    public function agente_por_id($agentes_id = 0)
    {
        $age = $this->CI->agentes_model->agente_por_id($agentes_id);
        $age->img_profile = isset($age->img_profile) ? $age->img_profile : base_url_slash() . AGENTE_IMG_BASE;
        return $age;
    }

    public function agente_todos()
    {
        $agentes = $this->CI->agentes_model->agentes_todos();
        foreach ($agentes as $agente) {
            $agente->img_profile = isset($agente->img_profile) && $agente->img_profile != '' ? $agente->img_profile : base_url_slash() . AGENTE_IMG_BASE;
        }
        return $agentes;
    }

    public function agentes_todos_habiles()
    {
        $agentes = $this->CI->agentes_model->agentes_todos_habiles();
        foreach ($agentes as $agente) {
            $agente->img_profile = isset($agente->img_profile) ? $agente->img_profile : base_url_slash() . AGENTE_IMG_BASE;
        }
        return $agentes;
    }

    public function insertar_agente($agente = array())
    {
        return $this->CI->agentes_model->insertar_agente($agente);
    }

    public function editar_agente($agente = array())
    {
        return $this->CI->agentes_model->editar_agente($agente);
    }

}