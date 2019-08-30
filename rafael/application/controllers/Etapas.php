<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Etapas extends CPC_Controller
{
    static $path = 'etapas';

    /**
     * Carrega os model que serão usado neste controller
    */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Lista os itens desta class
    */

    public function index()
    {   
        $this->data['nome'] = explode('/',base_url())[4];
        $this->data['nome'] = str_replace('-',' ',$this->data['nome']);
        $this->data['nome'] = ucwords($this->data['nome']);
        $this->loadTemplate($this->templatedefault, self::$path . '/index', $this->data);
    }
}