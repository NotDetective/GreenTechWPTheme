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
<!-- Wrapper -->
<div id="wrapper">

    <div id="main">

        <!-- Post -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="post">
                <header>
                    <div class="title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p>
                            <?php
                            the_category(', ');
                            ?>
                        </p>
                    </div>
                    <div class="meta">
                        <time class="published" datetime="2015-11-01">
                            <?php the_time('F j, Y'); ?>
                        </time>
                        <a href="user/post/<?php echo the_author_meta('ID'); ?>" class="author">
                            <span class="name">
                                <?php the_author(); ?>
                            </span>
                            <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" alt=""/>
                        </a>

                    </div>
                </header>
                <a href="<?php the_permalink(); ?>" class="image featured">
                    <?php echo the_post_thumbnail('single-post-thumbnail'); ?>
                </a>
                <p>
                    <?php if (is_front_page()) : ?>
                        <?php the_excerpt(); ?>
                    <?php elseif (!is_front_page()) : ?>
                        <?php the_content(); ?>
                    <?php endif; ?>
                </p>
                <footer>
                    <?php if (is_front_page()): ?>
                        <ul class="actions">
                            <li><a href="<?php the_permalink(); ?>" class="button large">Continue Reading</a></li>
                        </ul>
                    <?php endif; ?>
                    <ul class="stats">
                        <li><a href="#">General</a></li>
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
        <?php if (is_front_page()) : ?>
            <ul class="actions pagination">
                <li>
                    <?php if (get_previous_posts_link()) : ?>
                        <a href="<?php echo get_previous_posts_page_link(); ?>" class="button large">Previous Page</a>
                    <?php else : ?>
                        <a href="#" class="button large disabled">Previous Page</a>
                    <?php endif; ?>
                </li>
                <li>
                    <?php if (get_next_posts_link()) : ?>
                        <a href="<?php echo get_next_posts_page_link(); ?>" class="button large next">Next Page</a>
                    <?php else : ?>
                        <a href="#" class="button large disabled">Next Page</a>
                    <?php endif; ?>
                </li>
            </ul>
        <?php endif; ?>
    </div>
<footer>
    <p> &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
</footer>

<?php wp_footer(); ?>
</body>
</html>