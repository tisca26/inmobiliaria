<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Carga_archivos extends CI_Controller
{
    public function index()
    {
        $this->load->library('Lector_archivos');
        $xlsx = $this->lector_archivos->leer_xlsx(FCPATH . 'assets/archivos/base_propiedades_test.xlsx');

        $data['datos'] = $xlsx;
        $this->load->view('carga_archivos/carga_archivos_index', $data);
    }

    public function carga_propiedades()
    {
        $this->load->library('Lector_archivos');
        $xlsx = $this->lector_archivos->leer_xlsx(FCPATH . 'assets/archivos/base_propiedades_test.xlsx');
        $this->load->library('business/Propiedad');
        $datos = $this->propiedad->inserta_propiedades_xlsx($xlsx);
        $data['datos'] = $datos;
        $this->load->view('carga_archivos/carga_archivos_index', $data);
    }
}