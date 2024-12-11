<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
    <nav class="header-nav"><?php wp_nav_menu(['theme_location' => 'main-menu']); ?></nav>
</header>

<div id="main">

    <!-- Post -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="post">
            <header>
                <div class="title">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p>
                        <?php

                        ?>
                    </p>
                </div>
                <div class="meta">
                    <time class="published" datetime="2015-11-01">
                        <?php the_time('F j, Y'); ?>
                    </time>
                    <a href="#" class="author"><span class="name">
                        <?php the_author(); ?>
                        </span><img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>"
                                    alt=""/></a>
                </div>
            </header>
            <a href="<?php the_permalink(); ?>" class="image featured"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""/></a>
            <p>
                <?php the_excerpt(); ?>
            </p>
            <footer>
                <ul class="actions">
                    <li><a href="<?php the_permalink(); ?>" class="button large">Continue Reading</a></li>
                </ul>
                <ul class="stats">
                    <li><a href="#">General</a></li>
                    <li><a href="#" class="icon solid fa-heart">28</a></li>
                    <li><a href="#" class="icon solid fa-comment">
                            <?php echo get_comments_number(); ?>
                        </a></li>
                </ul>
            </footer>
        </article>

    <?php endwhile; else : ?>
        <p>No content found.</p>
    <?php endif; ?>

    <!-- Pagination -->
    <ul class="actions pagination">
        <li><a href="<?php echo get_previous_posts_page_link(); ?>"
               class="<?php echo is_front_page() ? 'button large disabled' : 'button large'; ?>"
            >Previous Page</a></li>
        <li><a href="<?php echo get_next_posts_page_link(); ?>" class="button large next">Next Page</a></li>
    </ul>

</div>

<footer>
    <p> &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
</footer>

<?php wp_footer(); ?>
</body>
</html>