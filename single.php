<?php get_header(); ?>
<main class="ea-main-page">
  <section class="proyect-section-content">
    <a class="proyect-section-content__return-link global-project-icon-link" href="<?php echo esc_url(home_url('/')); ?>"><i class="bi bi-arrow-left-short"></i> Volver al inicio</a>
    <h1 class="global-main-title"><?php the_title(); ?></h1>
    <?php the_post_thumbnail('full', ['class' => 'proyect-section-content__image']); ?>
    <div class="projects-section-container__tag-container">
      <?php the_field('etiquetas_del_proyecto'); ?>
    </div>
    <p class="proyect-section-content__text">
      <?php echo wp_kses_post(get_field('descripcion_del_proyecto')); ?>
    </p>
    <div class="proyect-section-content__links">
      <a class="global-button" href="<?php echo esc_attr(get_field('link_a_demo_del_proyecto')); ?>" target="_blank"><?php echo esc_html('Ver Demo del proyecto'); ?></a>
      <a
        class="global-icon-link global-project-icon-link"
        href="<?php echo esc_attr(get_field('link_al_codigo_del_proyecto')); ?>"
        target="_blank"
        aria-label="Enlace a código de github"><i class="bi bi-github"></i></a>
    </div>
  </section>
</main>
<?php get_footer(); ?>