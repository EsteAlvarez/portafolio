<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
);

$loop = new WP_Query($args); ?>

<div class="swiper projects-swiper">
    <div class="swiper-wrapper">

        <?php if ($loop->have_posts()) {
            while ($loop->have_posts()) {
                $loop->the_post();
        ?>

                <!-- HTML -->
                <figure class="projects-section-container swiper-slide">
                    <?php if (get_field('imagen_del_proyecto')): ?>
                        <img class="projects-section-container__image" src="<?php the_field('imagen_del_proyecto'); ?>" alt="<?php the_title(); ?>" />
                    <?php endif; ?>
                    <figcaption class="projects-section-container__info">
                        <div class="projects-section-container__info-header">
                            <a
                                class="global-project-icon-link"
                                href="<?php echo esc_attr(get_field('link_a_demo_del_proyecto')); ?>"
                                target="_blank"
                                aria-label="Enlace a proyecto"><?php echo esc_html('Demo'); ?> <i class="bi bi-arrow-up-right"></i></a>
                            <a
                                class="global-project-icon-link"
                                href="<?php echo esc_attr(get_field('link_al_codigo_del_proyecto')); ?>"
                                target="_blank"
                                aria-label="Enlace a código de github"><?php echo esc_html('Código'); ?> <i class="bi bi-github"></i></a>
                        </div>
                        <div class="projects-section-container__info-content">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <div class="projects-section-container__tag-container">
                                <?php the_field('etiquetas_del_proyecto'); ?>
                            </div>
                        </div>
                    </figcaption>
                </figure>

            <?php } ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<?php wp_reset_postdata();
        } else {
            echo '<p>No hay proyectos aún.</p>';
        }
