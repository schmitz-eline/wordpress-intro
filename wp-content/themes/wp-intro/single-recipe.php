<?php get_header() ?>

    <style type="text/css">
        .recipe {
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-between;
        }
        .recipe_ingredients {
            width: 320px;
            background-color: #F1F1F1;
            padding: 20px;
            display: flex;
            flex-direction: column-reverse;
        }
        .recipe_fig {
            display: block;
            position: relative;
            width: 100%;
            height: 0;
            padding-top: 100%;
            margin: 0;
        }
        .recipe_img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

<?php
// On ouvre la boucle (The Loop), la structure de contrôle de contenu propre à wordpress
if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h2><?= get_the_title(); ?></h2>

    <p><?= get_the_excerpt(); ?></p>

    <div class="recipe">
        <aside class="recipe_ingredients">
            <div>
                <h3>Ingrédients</h3>
                <p>À compléter...</p>
            </div>
            <figure class="recipe_fig">
                <?= get_the_post_thumbnail(size: 'medium', attr: ['class' => 'recipe_img']); ?>
            </figure>
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