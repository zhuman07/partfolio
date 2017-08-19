<?php
/*
  * Template name: Home
  * */
get_header();

 if(ale_get_meta('descr1')){
     echo ale_get_meta('descr1');
 } ?>


 <section id="about" class="s_about bg_light">
		<div class="section-header">
			<h2><?php the_title( "", "", true ); ?></h2>
			<div class="s_desc_wrap">
				<div class="s_desc"><?php echo ale_get_meta('page_descr') ?></div>
			</div>
		</div>
		<div class="section-container">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-push-4">
						<h3><?php echo ale_get_meta('col_1_h') ?></h3>
						<div class="avatar"><a href="<?php echo ale_get_meta('col_1_cont'); ?>" class="popup"><img src="<?php echo ale_get_meta('col_1_cont') ?>" alt="alt"></a></div>
					</div>
					<div class="col-md-4 col-md-pull-4">
							<h3><?php echo ale_get_meta('col_2_h') ?></h3>
							<h2 class="admin-name"><?php echo ale_get_meta('col_2_author_name') ?></h2>
							<p><?php echo ale_get_meta('col_2_cont') ?></p>
						<div class="social-wrap">
							<ul>
								<?php if( ale_get_option('emailcont') ) { ?><li><a href="mailto:<?php echo ale_get_option('emailcont'); ?>"><?php echo ale_get_option('emailcont'); ?></a></li> <?php } ?>
								<?php if( ale_get_option('vk') ) { ?><li><a href="<?php echo ale_get_option('vk'); ?>" target="_blink"><i class="fa fa-vk"></i></a></li> <?php } ?>
                <?php if( ale_get_option('git') ) { ?><li><a href="<?php echo ale_get_option('git'); ?>" target="_blink"><i class="fa fa-github"></i></a></li> <?php } ?>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<h3><?php echo ale_get_meta('col_3_h') ?></h3>
						<?php echo ale_get_meta('col_3_cont') ?>
					</div>
					<div class="col-md-12">
			<div class="price">
				<h3><?php echo ale_get_meta('col_4_h') ?></h3>
					<?php echo ale_get_meta('col_4_cont') ?>
			</div>
		</div>
				</div>
			</div>
		</div>
	</section>




<?php get_footer(); ?>

