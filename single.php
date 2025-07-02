<?php get_header(); ?>
<main class="ea-main-page">
  <section class="proyect-section-content">
    <div>
      <a class="return-project-link" href="<?php echo esc_url(home_url('/')); ?>"><i class="bi bi-arrow-left-short"></i> <?php echo esc_html('Volver al inicio'); ?></a>
    </div>
    <?php the_post_thumbnail('full', ['class' => 'proyect-section-content__image']); ?>
    <div class="proyect-section-content__links">
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
    <h1 class="single-title-proyect"><?php the_title(); ?></h1>
    <p class="proyect-section-content__text">
      <?php echo wp_kses_post(get_field('descripcion_del_proyecto')); ?>
    </p>
    <div class="projects-section-container__tag-container">
      <?php the_field('etiquetas_del_proyecto'); ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>