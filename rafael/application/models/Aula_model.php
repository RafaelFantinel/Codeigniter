<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Aula_model extends Base_model {
    function __construct(){
        parent::__construct();
        $this->tabela = 'aula';
    }
    
    function valida(&$aula){
        return true;
    }

}