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

            $this->db->select('*')
                     ->from($this->table)
                     ->limit($limit, $offset)
                     ->group_by('id');
            $query = $this->db->get();

            /*$this->db->distinct();
            $query = $this->db->get($this->table, $limit, $offset);*/
            return $query->result_array();
        }

        $query = $this->db->get_where($this->table, array('rewrite' => $slug));
        return $query->row_array();
    }

    /**
     *  comptabilise le nombre d'entrée(s) de la table
     */
    public function count()
    {
        $count = $this->db->count_all($this->table);
        return $count;
    }

    /**
     *  permet d'ajouter des données dans la table
     */
    public function set_news()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'underscore', TRUE);
        $actualDate = (new DateTime())->format('Y-m-d');

        $data = array(
            'title' => $this->input->post('title'),
            'date' => $actualDate,
            'rewrite' => $slug,
            'content' => $this->input->post('text')
        );

        return $this->db->insert('news', $data);
    }
}