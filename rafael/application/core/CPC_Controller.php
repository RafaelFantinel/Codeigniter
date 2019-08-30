<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Classe padrão que serve como base para os controladores
 */
class CPC_Controller extends CI_Controller
{
    /*
     * Templates padrões
     */

    public $templatedefault = 'templates/template'; //template padrão para as paginas
    public $template_data = array();
    public $data = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function setData($name, $value)
    {
        $this->template_data[$name] = $value;
    }

    public function loadTemplate($template = '', $view = '', $view_data = [], $return = false)
    {
        $this->CI = &get_instance();
        $this->setData('contents', $this->CI->load->view($view, empty($view_data)?$this->data:$view_data, true));
        return $this->CI->load->view($template, $this->template_data, $return);
    }
}
