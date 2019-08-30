<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Turma extends CPC_Controller
{
    static $path = 'turma';

    /**
     * Carrega os model que serão usado neste controller
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('turma_model','turma');
    }

    /**
     * Lista os itens desta class
    */

    public function index()
    {
 
        $this->data['turmas'] = $this->turma->getAll();
        
        $this->loadTemplate($this->templatedefault, self::$path . '/index');
    }
    public function cadastrar()
    {
        $this->loadTemplate($this->templatedefault, self::$path.'/cadastrar');
    }
    public function salvar()
    {
        $turma = $this->input->post(); 
        if(empty($turma)){

        }else{
            $this->turma->save($turma); 
        }

        redirect(base_url("/turma/index"));
    }
    public function remover($turmaid = null)
    {
        if(!empty($turmaid)){
            if($this->turma->delete($turmaid)){ 
                
            }else{

            }
        }

        redirect(base_url('/turma/index'));
    }
    public function editar($turmaid = null)
    {
        if(empty($turmaid)){
            redirect(base_url('/turma/index'));
        }else{
            
            $this->data['turma'] = $this->turma->getById($turmaid);
            $this->loadTemplate($this->templatedefault, self::$path.'/editar');
        }
    }

    
}