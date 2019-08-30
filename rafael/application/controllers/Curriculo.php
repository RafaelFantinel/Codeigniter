<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Curriculo extends CPC_Controller
{
    static $path = 'curriculo';

    /**
     * Carrega os model que serão usado neste controller
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('curriculo_model','curriculo');
    }

    /**
     * Lista os itens desta class
    */

    public function index()
    {
 
        $this->data['curriculos'] = $this->curriculo->getAll();
        
        $this->loadTemplate($this->templatedefault, self::$path . '/index');
    }
    public function cadastrar()
    {
        $this->loadTemplate($this->templatedefault, self::$path.'/cadastrar');
    }
    public function salvar()
    {
        $curriculo = $this->input->post(); 
        if(empty($curriculo)){

        }else{
            $this->curriculo->save($curriculo); 
        }

        redirect(base_url("/curriculo/index"));
    }
    public function remover($curriculoid = null)
    {
        if(!empty($curriculoid)){
            if($this->curriculo->delete($curriculoid)){ //deleta pelo id enviado via url
                //deletou
            }else{

            }
        }

        redirect(base_url('/curriculo/index'));
    }
    public function editar($curriculoid = null)
    {
        if(empty($curriculoid)){
            redirect(base_url('/curriculo/index'));
        }else{
            
            $this->data['curriculo'] = $this->curriculo->getById($curriculoid);
            $this->loadTemplate($this->templatedefault, self::$path.'/editar');
        }
    }

  
}
   
    
