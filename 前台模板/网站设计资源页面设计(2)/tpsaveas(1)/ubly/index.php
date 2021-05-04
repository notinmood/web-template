<?php
get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                
                    <div class="date">
                    <span class="day"><?php the_time('M') ?></span><br />
                    <span class="month"><?php the_time('d') ?></span><br />
                    <span class="year"><?php the_time('Y') ?></span>
                    </div>                    
				
                    <div class="post_content_right">
                        <div class="post_title">
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        </div>
    					
                        <div class="post_subdetails">
                        
                            <div class="post_categories">Posted in <?php the_category(', ') ?></div>
                            <div class="comments_box"><?php comments_popup_link('0 comments', '1 comment', '% comments'); ?></div>
                        
                        </div>
                        
                        <div class="entry">
                            <?php the_content('Read the rest of this entry &raquo;'); ?>
                        </div>
                        <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?>  <?php edit_post_link('Edit', '', ' | '); ?> </p>
                    </div>
				
			</div>
            
            <!--End of post-->

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
