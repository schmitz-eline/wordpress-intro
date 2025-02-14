<?php get_header() ?>

    <style type="text/css">
        .recipe {
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-between;
        }
        .recipe_ingredients {
            width: 320px;
            background-color: #CCC;
            padding-left: 30px;
        }
    </style>

<?php
// On ouvre la boucle (The Loop), la structure de contrôle de contenu propre à wordpress
if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h2><?= get_the_title(); ?></h2>

    <p><?= get_the_excerpt(); ?></p>

    <div class="recipe">
        <aside class="recipe_ingredients">
            <h3>Ingrédients</h3>
            <p>À compléter...</p>
        </aside>
        <section class="recipe_steps">
            <h3>Étapes</h3>
            <div><?php the_content(); ?></div>
        </section>
    </div>

<?php
// On ferme la boucle
endwhile; else: ?>
    <p>Cette recette n'existe pas</p>
<?php endif; ?>

<?php get_footer() ?>