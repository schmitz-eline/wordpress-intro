<?php /* Template Name: Template "À propos" */ ?>
<?php get_header() ?>
    <h2>À propos de moi</h2>
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