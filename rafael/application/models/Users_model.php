<?php
db->where('username', $this->input->post('username')); 
        $this->db->where('password', md5($this->input->post('password')));
        $this->db->where('status', 1); // Verifica o status do usuário

        $query = $this->db->get('users'); 

        if ($query->num_rows == 1) { 
            return true; // RETORNA VERDADEIRO
        }
    }

    # VERIFICA SE O USUÁRIO ESTÁ LOGADO
    function logged() {
        $logged = $this->session->userdata('logged');

        if (!isset($logged) || $logged != true) {
            echo 'Voce nao tem permissao para entrar nessa pagina. Efetuar Login';
            die();
        }
    }
}
