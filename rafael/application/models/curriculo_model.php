<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Curriculo_model extends Base_model {
    function __construct(){
        parent::__construct();
        $this->tabela = 'curriculo';
    }
    
    function valida(&$curriculo){
        return true;
    }

}