    <!-- Footer -->

    <footer class="main-footer ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if (ale_get_option('copyrights')) : ?>
                    &copy; <?php echo ale_option('copyrights'); ?>
            <?php else: ?>
                    &copy; <?php _e('2016 Zhuman Beknazar', 'aletheme')?>
            <?php endif; ?>
                    <div class="social-wrap">
                            <ul>
                                <?php if( ale_get_option('vk') ) { ?><li><a href="<?php echo ale_get_option('vk'); ?>" target="_blink"><i class="fa fa-vk"></i></a></li> <?php } ?>
                                <?php if( ale_get_option('git') ) { ?><li><a href="<?php echo ale_get_option('git'); ?>" target="_blink"><i class="fa fa-github"></i></a></li> <?php } ?>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <?php wp_footer(); ?>
        <!--[if lt IE 9]>
    <script src="libs/html5shiv/es5-shim.min.js"></script>
    <script src="libs/html5shiv/html5shiv.min.js"></script>
    <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="libs/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
    <?php ale_get_option('ga') ?>
</body>
</html>