<?php get_header(); ?>
<main class="ea-main-page">

    <!-- Presentation Section -->
    <section class="ea-presentation">
        <?php if (get_field('imagen_de_perfil')): ?>
            <img class="ea-presentation__profile-image" src="<?php the_field('imagen_de_perfil'); ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>
        <h1 class="global-main-title"><?php the_title(); ?></h1>
        <p class="ea-presentation__profession">
            <?php echo esc_html(get_field('profesion')); ?>
        </p>
        <p class="ea-presentation__presentation">
            <?php echo wp_kses_post(get_field('presentacion')); ?>
        </p>
        <div class="ea-presentation__social-icons-container">
            <a
                class="global-icon-link github"
                href="<?php echo esc_attr(get_field('link_a_github')); ?>"
                target="_blank"
                aria-label="Enlace a perfil de github"><i class="bi bi-github"></i></a>
            <a
                class="global-icon-link linkedin"
                href="<?php echo esc_attr(get_field('link_a_linkedin')); ?>"
                target="_blank"
                aria-label="Enlace a perfil de linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="global-sections-margin">
        <h2 class="global-section-title">
            <span class="global-section-number"><?php echo esc_html('01.'); ?></span><?php echo esc_html(get_field('titulo_seccion_de_habilidades')); ?>
        </h2>
        <div class="ea-skills-container">
            <div>
                <h3 class="skill-item-title"><?php echo esc_html(get_field('lenguajes')); ?></h3>
                <div class="ea-skills-container__list">
                    <?php the_field('lenguajes_dominados'); ?>
                </div>
            </div>
            <div>
                <h3 class="skill-item-title"><?php echo esc_html(get_field('frameworks')); ?></h3>
                <div class="ea-skills-container__list">
                    <?php the_field('frameworks_dominados'); ?>
                </div>
            </div>
            <div>
                <h3 class="skill-item-title"><?php echo esc_html(get_field('cms')); ?></h3>
                <div class="ea-skills-container__list">
                    <?php the_field('cms_dominados'); ?>
                </div>
            </div>
            <div>
                <h3 class="skill-item-title"><?php echo esc_html(get_field('diseno')); ?></h3>
                <div class="ea-skills-container__list">
                    <?php the_field('herramientas_de_diseno_dominadas'); ?>
                </div>
            </div>
            <div>
                <h3 class="skill-item-title"><?php echo esc_html(get_field('herramientas')); ?></h3>
                <div class="ea-skills-container__list">
                    <?php the_field('herramientas_dominadas'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="global-sections-margin">
        <div class="ea-title-experience-cotainer">
            <h2 class="global-section-title">
                <span class="global-section-number"><?php echo esc_html('02.'); ?></span><?php echo esc_html(get_field('titulo_de_seccion_experiencia')); ?>
            </h2>
            <?php if (get_field('curriculum')): ?>
                <a class="global-button" href="<?php the_field('curriculum'); ?>" target="_blank" download><?php echo esc_html('Descargar CV'); ?></a>
            <?php endif; ?>
        </div>

        <div class="ea-experience-container">
            <div class="ea-experience-container__item">
                <span><?php echo esc_html(get_field('fecha_de_primera_experiencia')); ?></span>
                <div>
                    <h3 class="ea-experience-container__item-title">
                        <?php echo esc_html(get_field('titulo_de_primera_experiencia')); ?>
                    </h3>
                    <p>
                        <?php echo wp_kses_post(get_field('descripcion_de_primera_experiencia')); ?>
                    </p>
                </div>
            </div>
            <div class="ea-experience-container__item">
                <span><?php echo esc_html(get_field('fecha_de_segunda_experiencia')); ?></span>
                <div>
                    <h3 class="ea-experience-container__item-title">
                        <?php echo esc_html(get_field('titulo_de_segunda_experiencia')); ?>
                    </h3>
                    <p>
                        <?php echo wp_kses_post(get_field('descripcion_de_segunda_experiencia')); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="global-sections-margin">
        <h2 class="global-section-title">
            <span class="global-section-number"><?php echo esc_html('03.'); ?></span><?php echo esc_html(get_field('titulo_de_seccion_de_proyectos')); ?>
        </h2>
        <?php include get_template_directory() . '/assets/modules/loop-proyectos.php'; ?>
    </section>

    <section class="global-sections-margin">
        <h2 class="global-section-title">
            <span class="global-section-number"><?php echo esc_html('04.'); ?></span><?php echo esc_html(get_field('titulo_de_seccion_de_contacto')); ?>
        </h2>
        <div class="contact-container">
            <button class="copy-button" id="copy_button">
                <span id="contact_mail"><?php echo esc_html(get_field('email_de_contacto')); ?></span>
            </button>
            <span class="copy-message" id="copy_message"></span>
        </div>
    </section>
</main>
<?php get_footer(); ?>