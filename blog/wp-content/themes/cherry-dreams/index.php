<?php get_header(); ?>

    <div id="content">
    
		<?php if (have_posts()) : ?>
        
        <?php while (have_posts()) : the_post(); ?>
        
            <div id="post" <?php the_ID(); ?>>
            
                <div id="post_title">
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <p class="autor"><strong>Posted by:</strong> <?php the_author() ?></p>
                <p class="info"><?php the_time('F jS, Y') ?> &gt;&gt; <?php the_category(', ') ?> </p>
                </div><!--post_title-->
                            
            <?php the_content('Read the rest of this entry &raquo;'); ?>
                            
            <div class="clear"></div>
            
                <p class="postmetadata"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> | <?php the_tags('Tags: ', ', ', ''); ?> <?php edit_post_link('(Edit)', '', ' '); ?>  </p>
                     
            </div><!--post-->
        
        <?php endwhile; ?>
        
            <div class="navigation">
            <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
            <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
            </div><!--navigation-->
        
        <?php else : ?>
        
            <h2 class="center">Not Found</h2>
            <p class="center">Sorry, but you are looking for something that isn't here.</p>
            <?php include (TEMPLATEPATH . "/searchform.php"); ?>
        
        <?php endif; ?>
    
    </div><!--content-->
    
<?php get_sidebar(); ?>
    
<?php get_footer(); ?>
