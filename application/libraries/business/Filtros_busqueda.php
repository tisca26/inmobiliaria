<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Filtros_busqueda
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('propiedades_model');
    }

    public function tipos_propiedades($order_by = 'tipo_propiedad_id', $dir_order = 'ASC')
    {
        $this->CI->load->library('business/Catalogos');
        return $this->CI->catalogos->tipos_propiedades($order_by, $dir_order);
    }

    public function ubicacion()
    {
        return $this->CI->propiedades_model->ubicaciones_distintas();
    }

    public function cuartos()
    {
        $max_cuartos = 0;
        $obj_cuartos = $this->CI->propiedades_model->max_cuartos();
        if (is_object($obj_cuartos)) {
            $max_cuartos = round($obj_cuartos->cuartos);
        }
        return range(1, $max_cuartos);
    }

    public function precio()
    {
        $max_precio = 0;
        $obj_precio = $this->CI->propiedades_model->max_precio();
        if (is_object($obj_precio)) {
            $max_precio = round($obj_precio->precio_publico) + 100000;
        }
        return range(0, $max_precio, 100000);
    }
}