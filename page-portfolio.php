<?php
/*
  * Template name: Portfolio
  * */
get_header();

 if(ale_get_meta('descr1')){
     echo ale_get_meta('descr1');
 } ?>
    <!-- Content -->
    


    <section id="portfolio" class="s_portfolio bg_dark">
        <div class="section-header">
            <h2><?php the_content(); ?></h2>
            <div class="s_desc_wrap">
                <div class="s_desc">Мои последние работы</div>
            </div>
        </div>
        <div class="section-container">
            <div class="container">
                <div class="row">
                    <div class="filter-div controls">
                        <ul>
                            <li class="filter active" data-filter="all">Все работы</li>
                            <li class="filter" data-filter=".frontend">Front</li>
                            <li class="filter" data-filter=".backend">Back</li>
                            <li class="filter" data-filter=".frontback">Front/Back</li>
                        </ul>
                    </div>
                    <div class="portfolio-table">
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="mix col-md-2 col-sm-4 col-xs-6 portfolio-item <?php echo wp_get_post_tags(); ?>">
                            <?php the_post_thumbnail(); ?>
                            <div class="item-content">
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo ale_trim_excerpt('20'); ?></p>
                                <a href="" class="popup-content">Посмотреть</a>
                            </div>
                            <div class="hidden">
                                <div class="post-full">
                                    <h1><?php the_title(); ?></h1>
                                    <?php the_content(); ?>
                                    <a href="#" target="_blink">Demo</a>
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                        </div>
                                <?php endwhile; else: ?>
                        <?php ale_part('notfound')?>
                    <?php wp_reset_query(); endif; ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>