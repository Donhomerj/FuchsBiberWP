<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php fuchsbiber_the_post_header( 'h1', $post ); ?>
    </header>
    <div class="entry-content">
        <?php fuchsbiber_the_content(); ?>
    </div>
    <footer class="entry-meta">
        <?php fuchsbiber_footer_meta() ?>
    </footer>
</article>
<div class="entry-content">
    <?php fuchsbiber_the_content(); ?>
</div>
<footer class="entry-meta">
    <?php fuchsbiber_footer_meta() ?>
</footer>
