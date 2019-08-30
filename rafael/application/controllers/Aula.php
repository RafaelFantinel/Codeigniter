<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Aula extends CPC_Controller 
{
    static $path = 'aula';

    /**
     * Carrega os model que serão usado neste controller
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('aula_model','aula');
    }

    /**
     * Lista os itens desta class
    */

    public function index()
    {
 
        $this->data['aulas'] = $this->aula->getAll();
        
        $this->loadTemplate($this->templatedefault, self::$path . '/index');
    }
    public function cadastrar()
    {
        $this->loadTemplate($this->templatedefault, self::$path.'/cadastrar');
    }
    public function salvar()
    {
        $aula = $this->input->post(); 
        if(empty($aula)){

        }else{
            $this->aula->save($aula); 
        }

        redirect(base_url("/aula/index"));
    }
    public function remover($aulaid = null)
    {
        if(!empty($aulaid)){
            if($this->aula->delete($aulaid)){ 
                
            }else{

            }
        }

        redirect(base_url('/aula/index'));
    }
    public function editar($aulaid = null)
    {
        if(empty($aulaid)){
            redirect(base_url('/aula/index'));
        }else{
            
            $this->data['aula'] = $this->aula->getById($aulaid);
            $this->loadTemplate($this->templatedefault, self::$path.'/editar');
        }
    }

    
}