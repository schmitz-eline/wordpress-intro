<?php get_header() ?>
    <h2>Bienvenue sur mon site !</h2>
    <?php
    // On ouvre la boucle (The Loop), la structure de contrôle de contenu propre à wordpress
    if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div><?= get_the_content() ?></div>

    <?php
        // On ferme la boucle
    endwhile; else: ?>
        <p>Pas de contenu à afficher.</p>
    <?php endif; ?>
<?php get_footer() ?>