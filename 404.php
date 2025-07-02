<?php get_header(); ?>
<main class="ea-main-page">
  <section class="not-found-page-section">
    <h1 class="single-title-proyect not-found-page-title"><?php echo esc_html('404'); ?></h1>
    <p class="not-found-page-section__text"><?php echo esc_html('La página que buscas no existe.'); ?></p>
    <div>
      <a class="return-project-link" href="<?php echo esc_url(home_url('/')); ?>"><i class="bi bi-arrow-left-short"></i> <?php echo esc_html('Volver al inicio'); ?></a>
    </div>
  </section>
</main>
<?php get_footer(); ?>