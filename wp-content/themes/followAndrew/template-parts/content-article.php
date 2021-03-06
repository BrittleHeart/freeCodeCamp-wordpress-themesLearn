<div class="container">
    <header class="content-header">
        <div class="meta mb-3">
            <span class="date"><?php the_date();  // Gets the date, when post has been published ?></span>
            <?php the_tags('<span class="tag"><i class="fa fa-tag"></i>',
                '</span> <span class="tag"><i class="fa fa-tag"></i>','</span>'); ?>
            <span class="comment"><a href="#comments">
                <i class='fa fa-comment'></i> <?php comments_number(); ?></a>
            </span>
        </div>
    </header>

    <?php the_content(); // Showing off the content ?>
    <?php comments_template(); // Showing off all the comments related to the post ?>
</div>
