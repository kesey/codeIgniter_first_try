<?php
/**
 * Created by PhpStorm.
 * User: Fabien
 * Date: 08/12/2016
 * Time: 19:43
 */

class News extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }

    /**
     *  charge les templates composant la vue
     *  @param string $contentView définit quel contenu on charge
     *  @param array $data permet de passer les données à la vue
     */
    public function loadView($contentView = 'index', $data = array())
    {
        $this->load->view('templates/header');
        $this->load->view($this->news_model->table.'/'.$contentView, $data);
        $this->load->view('templates/footer');
    }

    /**
     *  liste les news avec une limite par page (définit par $limit)
     *  @param int $offset permet la pagination
     */
    public function lists($offset = 0)
    {
        $limit = 2; // définit le nombre de news affichée(s) par page

        $totalPages = ceil($this->news_model->count() / $limit); // nombre total de page(s)
        $data['news'] = $this->news_model->get('', $limit, $offset);
        $data['previous'] = ($offset - $limit) > 0 ? $offset - $limit : 0; // recalcule de l'offset par rapport à la page sur laquelle on se trouve
        $data['next'] = ($offset + $limit) > $totalPages ? $totalPages : $offset + $limit;

        $this->loadView('index', $data);
    }

    /**
     *  affiche les détails d'une news
     *  @param string $slug correspond à la colonne rewrite de la news
     */
    public function one($slug = '')
    {
        $data['news_item'] = $this->news_model->get($slug);

        if (empty($data['news_item']))
        {
            show_404();
        }

        $this->loadView('view', $data);
    }
}