<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Turma_model extends Base_model {
    function __construct(){
        parent::__construct();
        $this->tabela = 'turma';
    }
    
    function valida(&$turma){
        return true;
    }

}