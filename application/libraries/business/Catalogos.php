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
        foreach ($tipos as $tipo){
            $res[$tipo->tipo_propiedad_id] = $tipo->nombre;
        }
        return $res;
    }

}