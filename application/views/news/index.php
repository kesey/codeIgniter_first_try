<?php
/**
 * Created by PhpStorm.
 * User: Fabien
 * Date: 08/12/2016
 * Time: 19:51
 */
?>

<section class="list_actus">
    <div class="wrapper_inside">
        <div class="content_section bg_white">
            <div class="container-fluid">
                <ul class="list_actus">
                    <?php foreach ($news as $news_item): ?>
                    <li>
                        <div class="row">
                            <div class="col-sm-4">
                                <div style="background-image:url(<?php echo base_url('ressources/medias/'.$news_item['image']); ?>);" class="illustration"></div>
                            </div>
                            <div class="col-sm-8">
                                <div class="content">
                                    <span class="date"><?php echo $news_item['date']; ?></span>
                                    <h3><?php echo $news_item['title']; ?></h3>
                                    <p><?php echo $news_item['content']; ?></p>
                                    <a href="<?php echo site_url('news/'.$news_item['rewrite']); ?>" class="btn btn-default2 text-uppercase">> Lire la suite</a>
                                </div>
                            </div>
                        </div>

                    </li>
                    <?php endforeach; ?>
                </ul>

                <nav class="text-right">
                    <ul class="pagination">
                        <li>
                            <a href="<?php echo site_url('news/page/'.$previous); ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('news/page/'.$next); ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="shortcuts">
    <div class="wrapper_inside">
        <div class="content_section">

            <ul class="grid">
                <li>
                    <div class="tab small">
                        <a href="#"></a>
                        <h3>LES ANCIENS JEUX</h3>
                        <div class="illustration" style="background-image: url(<?php echo base_url('ressources/medias/img_event.jpg'); ?>);"></div>

                    </div>
                </li>
                <li>
                    <div class="tab small">
                        <a href="#"></a>
                        <h3>LA COUPE DE FRANCE</h3>
                        <div class="illustration" style="background-image: url(<?php echo base_url('ressources/medias/img_selection.jpg'); ?>);"></div>

                    </div>
                </li>
                <li>
                    <div class="tab small">
                        <a href="#"></a>

                        <h3>L’équipe de france</h3>
                        <div class="illustration" style="background-image: url(<?php echo base_url('ressources/medias/img_match.jpg'); ?>);"></div>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

