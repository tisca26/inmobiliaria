<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller
{
    private $pag_redirect = 'admon/agentes';
    public function index()
    {
        if (get_attr_session('logged_in') === 'OK_LOGIN') {
            redirect($this->pag_redirect);
        }
        $this->load->view('admon/login/login_index');
    }

    public function entrar()
    {
        $usr = $this->input->post('nombre_usr');
        $pass = $this->input->post('pass_usr');
        $this->load->library('Auth_lib');
        if (!$this->auth_lib->login($usr, $pass)) {
            set_bootstrap_alert('Error en el usuario o contraseña', BOOTSTRAP_ALERT_DANGER);
            return $this->index();
        } else {
            $intento_url = get_attr_session('intento_url');
            return redirect(isset($intento_url)? $intento_url : $this->pag_redirect);
        }
    }

    public function salir()
    {
        if (get_attr_session('logged_in')) {
            $this->session->sess_destroy();
        }
        redirect('admon/login/');
    }
}