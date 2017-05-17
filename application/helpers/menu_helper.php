<?php defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('menu_lang_sel')) {
    function menu_lang_sel()
    {
        $CI =& get_instance();
        $langs = $CI->config->item('lang_uri_abbr');

        $actual_lang = lang_segment();
        $result = '<div id="lang-sel" class="btn-group nomargin pull-right visible-lg visible-md">';
        $result .= '<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">';
        $result .= '<img src="' . cdn_assets() . 'images/icons/flags/' . $actual_lang .'.png" alt="' . $langs[$actual_lang] . '">';
        $result .= '&nbsp;&nbsp;<span class="caret"></span></button><ul class="dropdown-menu dropdown-menu-right" role="menu">';

        foreach ($langs as $key => $lang){
            if ($key != $actual_lang){
                $result .= '<li><a class="text-uppercase" href="' . cambia_idioma($key) . '">';
                $result .= '<img src="' . cdn_assets() . 'images/icons/flags/' . $key .'.png" alt="' . $langs[$key] . '"> ' . $key . '</a></li>';
            }
        }
        $result .= '</ul></div>';
        return $result;
    }
}
