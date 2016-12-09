<?php
/**
 * Created by PhpStorm.
 * User: Fabien
 * Date: 08/12/2016
 * Time: 19:55
 */
?>

<section class="big_image actu">
    <div class="wrapper_inside">
        <div class="content_section">

            <div class="illustration" style="background-image: url(<?php echo base_url('ressources/medias/'.$news_item['image']); ?>);"></div>

        </div>
    </div>
</section>

<section class="block_content_actu">
    <div class="wrapper_inside">

        <div class="content_section bg_white">
            <div class="read_content  container-fluid">
            <div class="header_content">
                <span class="date"><?php echo $news_item['date']; ?></span>
                <h1 class="blue text-uppercase"><?php echo $news_item['title']; ?></h1>

            </div>
                <div class="read_content_big_section">
                    <div class="global-format">
                       <p><?php echo $news_item['content']; ?></p><br/>
                    </div>
                </diV>
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
