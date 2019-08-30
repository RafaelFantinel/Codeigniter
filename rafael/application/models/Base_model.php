<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Classe com os métodos padrões a todas as demais
 */
class Base_model extends CI_Model
{
    public $tabela = '';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * Conta o número de registro nesta tabela
     * @return Int
     */
    public function count()
    {
        return $this->db->count_all($this->tabela);
    }

    /**
     * Retorna os dados pelo seu id
     * @param Int $Id no banco
     * @return Array com os mesmos campos do banco
     */
    public function getById($id)
    {
        return is_numeric($id) ? $this->db->get_where($this->tabela, array($this->tabela . '_id' => $id))->row_array() : null;
    }

    /**
     * Retorna uma lista
     * @param int $limit : é o numero de registros retornados
     * @param int $offset : a partir de qual linha os registros seram retornado
     * @param string $orderBy : os campos para ordenação separados por virgulas "nome ASC,idade DESC"
     * @param array $where : um array para aplicar um filtro rápido entre as colunas da tabela em questão array('turma_id' => 2)
     *
     * @return Array de Array, cada array interno tem os mesmos campos de nome do campo
     */
    public function getAll($limit = null, $offset = null, $orderBy = null, $where = null)
    {
        if (!is_null($orderBy)) {
            $this->db->order_by($orderBy);
        }

        if (!is_null($where)) {
            $this->db->where($where);
        }

        return $this->db->get_where($this->tabela, array(), $limit, $offset)->result_array();
    }

    /**
     * Salva os registros
     *
     * @param array $dados os dados da tabela para salvar no banco
     *
     * @return boolean|int|array caso seja um tabela de relacionamento retorna boolean,
     * caso tenha id retorna o id gerado, caso tenha erro de validação, retorno array
     */
    public function save($dados)
    {
		
        $r = false;
        // se tem id, é para atualizar e não salvar
        if (isset($dados[$this->tabela . '_id'])) {
            if (($r = self::update($dados)) === true) {
                $r = $dados[$this->tabela . '_id'];
            }
        } else if(($r = $this->valida($dados)) === true) {
            $this->db->insert($this->tabela, self::clearKey($dados));
            $r = $this->db->insert_id();

            // quando se salva em uma tabela que não tem id próprio
            // tipo aluno_video, o Retorno é 0, mas a operação foi bem sucedida
            if ($r === 0 && $this->db->trans_status() === true) {
                $r = true;
            }
        }        
        return $r;
    }

    /**
     * Atualiza os registros
     *
     * @param array $dados os dados da tabela para atualizar no banco
     *
     * @return boolean|array caso seja um tabela de relacionamento retorna boolean,
     * caso tenha erro de validação, retorno array
     */
    public function update($dados)
    {
        
        if (!isset($dados[$this->tabela . '_id'])){
            return false;
        }else if(($r = $this->valida($dados)) === true) {
            $this->db
                ->set(self::clearKey($dados))
                ->where($this->tabela . '_id', $dados[$this->tabela . '_id'])
                ->update($this->tabela);
            return $this->db->trans_status();
        }
        
        return $r;
    }

    /**
     * Deleta um registro passando o seu id
     *
     * @param any $dado array com chave valor para o delete, ou o id do item para deletar
     *
     * @return boolean o status da transação
     */
    public function delete($dado)
    {
        // para não ter o risco de deletar toda a tabela, caso não venha algo válido
        $delete = false;
        
        if (is_null($dado)) {
            return false;
        }

        if (is_array($dado)) {
            foreach ($dado as $key => $value) {
                $this->db->where($key, $value);
                $delete = true;
            }
        } else {
            $this->db->where($this->tabela . '_id', $dado);
            $delete = true;
        }

        if($delete) {
            $this->db->delete($this->tabela);
        }
        return $this->db->trans_status();
    }

    /**
     * Retorna as foreign keys da tabela
     *
     * @return array
     */

    public function getForeignKeys()
    {
        $this->db
            ->select("COLUMN_NAME")
            ->from("information_schema.KEY_COLUMN_USAGE")
            ->where("REFERENCED_TABLE_NAME is not null")
            ->where("TABLE_NAME = '" . $this->tabela . "'");

        return array_column($this->db->get()->result_array(), "COLUMN_NAME");
    }

    /**
     * Retorna as colunas da tabela
     *
     * @param bool : se quer o nome da coluna com a chave do array ou como valor
     * @return array : array('usuario_id'=> 0,'nome'=> 1 ...) da tabela usuario
     */
    public function getColunas($chave = false)
    {
        $colunas = $this->db->list_fields($this->tabela);
        return $chave ? array_flip($colunas) : $colunas;
    }

    /**
     * Para limpar as chaves (colunas) do item que não estam na tabela
     *
     * @param array $d o array para ser contrastado com os campo válidos no banco
     */
    private function clearKey($d)
    {
        // se for um objeto, tranforma para array
        if (is_object($d)) {$d = get_object_vars($d);}

        return array_intersect_key($d, self::getColunas(true));
    }
}
