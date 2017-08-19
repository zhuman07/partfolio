<?php
  http_response_code(500);
?>
<?php get_header(); ?>
   



    <section id="portfolio" class="s_portfolio bg_dark">
        <div class="section-header">
            <h2><?php echo get_cat_name(6); ?></h2>
            <div class="s_desc_wrap">
                <div class="s_desc"><?php echo category_description(6); ?></div>
            </div>
        </div>
        <div class="section-container">
            <div class="container">
                <div class="row">
                    <div class="filter-div controls">
                        <ul>                       
                            <li class="filter active" data-filter="all"><?php _e('Все работы', 'aletheme')?></li>
                            <li class="filter" data-filter=".<?php $tag = get_tag(3);echo $tag->slug; ?>"><?php echo $tag->name; ?></li>
                            <li class="filter" data-filter=".<?php $tag = get_tag(4);echo $tag->slug; ?>"><?php echo $tag->name; ?></li>
                            <li class="filter" data-filter=".<?php $tag = get_tag(5);echo $tag->slug; ?>"><?php echo $tag->name; ?></li>
                        </ul>
                    </div>
                    <div class="portfolio-table">
                    <?php $my_query = new WP_Query('cat');
                                while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <div class="mix col-md-2 col-sm-4 col-xs-6 portfolio-item <?php $tags = wp_get_post_tags($post->ID);
                        if($tags) { 
                            foreach ($tags as $tag) {
                            echo ' ' . $tag->slug;
                            } 
                        } ?>" >
                            <?php the_post_thumbnail(); ?>
                            <div class="item-content">
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo ale_trim_excerpt('20'); ?></p>
                                <a href="" class="popup-content"><?php _e('Посмотреть', 'aletheme')?></a>
                            </div>
                            <div class="hidden">
                                <div class="post-full">
                                    <h1><?php the_title(); ?></h1>
                                    <?php the_content(); ?>
                                    <a href="http://<?php echo ale_get_meta('page_descr') ?>" target="_blink"><?php _e('Demo', 'aletheme')?></a>
                                    
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
    </section>



<?php get_footer(); ?>