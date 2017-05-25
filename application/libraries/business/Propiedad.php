<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Propiedad
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('propiedades_model');
    }

    public function ultimo_id()
    {
        return $this->CI->propiedades_model->ultimo_id();
    }

    public function error_consulta()
    {
        return $this->CI->propiedades_model->error_consulta();
    }

    public function propiedad_por_id($propiedades_id = 0)
    {
        return $this->CI->propiedades_model->propiedad_por_id($propiedades_id);
    }

    public function propiedad_por_id_completo($propiedades_id = 0)
    {
        return $this->CI->propiedades_model->propiedad_por_id_completo($propiedades_id);
    }

    public function imagenes_por_propiedad_id($propiedades_id = 0)
    {
        $dir = PROPIEDADES_IMGS_FULL . $propiedades_id;
        $files = array_diff(scandir($dir), array('.', '..'));
        foreach ($files as $key => $file) {
            $files[$key] = base_url() . PROPIEDADES_IMGS_SHORT . $propiedades_id . '/' . $file;
        }
        $files = array_values($files);
        return $files;
    }

    public function asigna_img_a_propiedades($propiedades = array())
    {
        foreach ($propiedades as $prop) {
            $imgs = $this->imagenes_por_propiedad_id($prop->propiedades_id);
            $prop->img = $imgs[0];
        }
        return $propiedades;
    }

    public function propiedades_destacadas()
    {
        $props = $this->CI->propiedades_model->propiedades_destacadas();
        $props = $this->asigna_img_a_propiedades($props);
        return $props;
    }

    public function propiedades_pagina_inicio()
    {
        $props = $this->CI->propiedades_model->propiedades_pagina_inicio();
        $props = $this->asigna_img_a_propiedades($props);
        return $props;
    }

    public function propiedades_oferta_especial()
    {
        $props = $this->CI->propiedades_model->propiedades_oferta_especial();
        $props = $this->asigna_img_a_propiedades($props);
        return $props;
    }

    public function cuantas_destacadas()
    {
        return $this->CI->propiedades_model->cuantas_destacadas();
    }

    public function cuantas_pagina_inicio()
    {
        return $this->CI->propiedades_model->cuantas_pagina_inicio();
    }

    public function cuantas_oferta_especial()
    {
        return $this->CI->propiedades_model->cuantas_oferta_especial();
    }

    public function cuantas_propiedades()
    {
        return $this->CI->propiedades_model->cuantas_propiedades();
    }

    public function propiedades_todas($limit = 10, $offset = 0)
    {
        $propiedades = $this->CI->propiedades_model->propiedades_todas($limit, $offset);
        $propiedades = $this->asigna_img_a_propiedades($propiedades);
        return $propiedades;
    }

    public function propiedades_filtros($limit = 10, $offset = 0, $busqueda_dto = null)
    {
        if (is_null($busqueda_dto)) {
            return $this->propiedades_todas($limit, $offset);
        }

        if (!is_object($busqueda_dto)) {
            return $this->propiedades_todas($limit, $offset);
        }

        $tipo_propiedad = isset($busqueda_dto->tipo_propiedad) ? $busqueda_dto->tipo_propiedad : '';
        $ubicacion = isset($busqueda_dto->ubicacion) ? $busqueda_dto->ubicacion : '';
        $cuartos = isset($busqueda_dto->cuartos) ? $busqueda_dto->cuartos : '';
        $precio_min = isset($busqueda_dto->min_precio) ? $busqueda_dto->min_precio : '';
        $precio_max = isset($busqueda_dto->max_precio) ? $busqueda_dto->max_precio : '';
        $propiedades = $this->CI->propiedades_model->propiedades_filtros($limit, $offset, $tipo_propiedad, $ubicacion, $cuartos, $precio_min, $precio_max);
        $propiedades = $this->asigna_img_a_propiedades($propiedades);
        return $propiedades;
    }

    public function inserta_propiedades_xlsx($xslx = array())
    {
        $this->CI->load->library('business/Catalogos');
        $this->CI->load->model('estatus_propiedades_model');
        $tipos_propiedades = $this->CI->catalogos->tipos_propiedades_array();
        foreach ($xslx as $key => $fila) {
            if ($key == 1) {
                continue;
            }
            $insrt = array();
            $insrt['propiedades_id'] = $fila['A'];
            $insrt['tipo_propiedad_id'] = array_search($fila['B'], $tipos_propiedades);
            $insrt['descripcion_es'] = $fila['C'];
            $insrt['descripcion_en'] = $fila['D'];
            $insrt['metros_utiles'] = $fila['E'];
            $insrt['metros_construidos'] = $fila['F'];
            $insrt['cuartos'] = $fila['G'];
            $insrt['salas'] = $fila['H'];
            $insrt['cocinas'] = $fila['I'];
            $insrt['banos'] = $fila['J'];
            $insrt['cajones_estacionamiento'] = $fila['K'];
            $insrt['precio_avaluo'] = $fila['L'];
            $insrt['precio_publico'] = $fila['M'];
            $insrt['longitud'] = $fila['W'];
            $insrt['latitud'] = $fila['V'];
            $insrt['calle'] = $fila['P'];
            $insrt['no_exterior'] = $fila['Q'];
            $insrt['no_interior'] = $fila['R'];
            $insrt['colonia'] = $fila['S'];
            $insrt['municipio'] = $fila['O'];
            $insrt['estado'] = $fila['T'];
            $insrt['pais'] = $fila['U'];
            $insrt['codigo_postal'] = $fila['N'];
            if ($this->CI->propiedades_model->insertar_propiedad($insrt)) {
                $ep_ins['propiedades_id'] = $insrt['propiedades_id'];
                $ep_ins['estatus_propiedad_id'] = 1; // TODOS SON VENTAS
                if (!$this->CI->estatus_propiedades_model->insertar_estatus($ep_ins)) {
                    return 'Error insertar relacion cerca de id: ' . $insrt['propiedades_id'];
                }
            } else {
                return 'Error insertar cerca de id: ' . $this->ultimo_id();
            }
        }
        return 'Todas las propiedades insertadas';
    }

}