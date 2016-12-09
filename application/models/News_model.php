<?php
/**
 * Created by PhpStorm.
 * User: Fabien
 * Date: 08/12/2016
 * Time: 19:06
 */

class News_model extends CI_Model
{
    public $table = 'news';   // table correspondant au model

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     *  recupère une ou plusieurs news suivant l'état de $slug
     *  @param string $slug correspond à la colonne rewrite de la news
     *  @param int $limit correspond au nombre de news à afficher par page
     *  @param int $offset permet la pagination
     */
    public function get($slug = '', $limit = 0, $offset = 0)
    {
        if ($slug === '')
        {
            $query = $this->db->get($this->table, $limit, $offset);
            return $query->result_array();
        }

        $query = $this->db->get_where($this->table, array('rewrite' => $slug));
        return $query->row_array();
    }

    /**
     *  comptabilise le nombre d'entrée de la table
     */
    public function count()
    {
        $sql = "SELECT COUNT(*) FROM $this->table";
        $query = $this->db->query($sql);
        $result = $query->row_array();
        $count = $result['COUNT(*)'];
        return $count;
    }
}