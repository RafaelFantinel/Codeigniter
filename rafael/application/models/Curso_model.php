<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * classe da model que gerencia o acesso aos dados do curso no banco, ela n tem nenhuma função pq todas necessárias
 * já se encontram na classe Base model que é extendida aqui
 */
class Curso_model extends Base_model {

    //tem q especificar aqui no construtor o nome da tabela no banco
    function __construct(){
        parent::__construct();
        $this->tabela = 'curso';
    }

    /**
     * Funções que você pode usar dessa classe que estão declarada na classe base_model
     * getAll -> pega TODOS registros, sem nenhum filtro
     * getByid -> pega pelo id da tabela
     * save -> se o objeto que está tentando salvar não tem id, ele insere, senão, ele atualiza
     * delete -> deleta o registro no banco pelo id
     * 
     * Caso for usar algo mais específico, como pegar os cursos que são de graça, vc pode criar uma função aqui
     * como getGratis mostrada abaixo
     */

    function getGratis(){
        $state = $this->db->select("*")
            ->from($this->tabela." as c")
            ->where("preco",0)
            ->get();
        return $state->result_array(); 
    }

    /**
     * Depois de criado aqui, voce pode usar la no controlador como no exemplo abaixo
     * $cursosGratis $this->curso->getGratis();
     * assim o $cursosGratis será um array com registros do banco que possuem preco 0
     */

    /**
     * Ou as que NÃO são grátis
     */
    function getComPreco(){
        $state = $this->db->select('*')
            ->from($this->tabela." as c")
            ->where("preco >",0)
            ->get();
        return $state->result_array();
    }


    /**
     * Qualquer duvida sobre a Query builder do CodeIgniter, visitar a pagina abaixo
     * https://www.codeigniter.com/user_guide/database/query_builder.html
     */

    //essa função que valida os dados antes de mandar para o banco, se ela não tiver declarada
    //vai dar erro na execução
    function valida(&$curso){
        return true;
    }
}