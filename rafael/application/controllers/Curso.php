<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Curso extends CPC_Controller
{
    static $path = 'curso';

    /**
     * Carrega os model que serão usado neste controller
    */
    public function __construct()
    {
        parent::__construct();
        //abaixo é como você carrega uma model que serve para fazer toda a comunicação com o banco
        //ele pega e instancia a classe curso model em uma variavel curso dentro do objeto
        $this->load->model('curso_model','curso');
    }

    /**
     * Lista os itens desta class
    */

    // url: selecao/:nome/curso  (tela principal do curso, é onde lista os cursos previamente cadastrados)
    public function index()
    {
        $this->data['cursos'] = $this->curso->getAll();
        //o LoadTemplate é a função principal para carregar telas, ela esta no application/core/CPC_Controller
        //a variavel do templatedefault ta declarada tbm no core, ela é basicamente uma string de templates/template
        //para indicar qual é o html padrão para essa página (esse projeto só vai ter 1 kkk acredito eu)
        //o segundo parâmetro é qual arquivo dentro de views que se encontra o conteúdo da página, no caso o path
        //é a variavel estática declarada la em cima, somada do index, pra indicar que no views/curso/index está o conteúdo da página
        $this->loadTemplate($this->templatedefault, self::$path . '/index');
    }

    // url: selecao/:nome/curso/cadastrar  (serve apenas para carregar a tela de cadastro)
    public function cadastrar()
    {
        $this->loadTemplate($this->templatedefault, self::$path.'/cadastrar');
    }

    // url: selecao/:nome/curso/salvar  (enviar os dados via method POST no form/ajax)
    public function salvar()
    {
        $curso = $this->input->post(); // pega do $_POST os dados

        if(empty($curso)){

        }else{
            $this->curso->save($curso); //ele insere um novo se n tiver recebido via post um curso_id, se recebeu ele faz update
        }

        redirect(base_url("/curso/index"));
    }

    // url: selecao/:nome/curso/remover/:id
    public function remover($cursoid = null)
    {
        if(!empty($cursoid)){
            if($this->curso->delete($cursoid)){ //deleta pelo id enviado via url
                //deletou
            }else{

            }
        }

        redirect(base_url('/curso/index'));
    }
    public function editar($cursoid = null)
    {
        if(empty($cursoid)){
            redirect(base_url('/curso/index'));
        }else{
            
            $this->data['curso'] = $this->curso->getById($cursoid);
            $this->loadTemplate($this->templatedefault, self::$path.'/editar');
        }
    }

  
}