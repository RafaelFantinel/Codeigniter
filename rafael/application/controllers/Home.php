<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CPC_Controller {

	static $path = 'home';

    /**
     * Carrega os model que serão usado neste controller
    */
    public function __construct()
    {
        parent::__construct();
    }

	/**
	 * Index Page for this controller.
	 *
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->data['nome'] = explode('/',base_url())[4];
        $this->data['nome'] = str_replace('-',' ',$this->data['nome']);
        $this->data['nome'] = ucwords($this->data['nome']);
		$this->loadTemplate($this->templatedefault,self::$path.'/index');
	}
}
