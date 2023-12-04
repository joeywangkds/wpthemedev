<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php echo get_the_date('d/m/y h:i:s') ?>
        <?php
        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');

        $authorName = $fname . " " . $lname;
        // echo $authorName;
        ?>
        <p>Post by <?php echo $authorName ?> </p>
        <?php
        $tags = get_the_tags();
        foreach ($tags as $tag): ?>
            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="badge bg-primary"><?php echo $tag->name; ?></a>

        <?php endforeach; ?>
<?php endwhile;
else : endif; ?>