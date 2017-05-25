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

}