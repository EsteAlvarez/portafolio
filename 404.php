<?php get_header(); ?>
<main class="ea-main-page">
  <section class="not-found-page-section">
    <h1 class="global-main-title"><?php echo esc_html('404'); ?></h1>
    <p class="not-found-page-section__text"><?php echo esc_html('La página que buscas no existe.'); ?></p>
    <a class="global-button" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html('Volver al inicio'); ?></a>
  </section>
</main>
<?php get_footer(); ?>