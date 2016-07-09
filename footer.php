        </div>
        <div class="container">
            <div class="row">
                <footer class="footer">

                </footer>
            </div>
        </div>
        <!--[if lt IE 9]>
        <script src="<?=SITE_TEMPLATE_PATH; ?>/js/html5shiv.min.js"></script>
        <![endif]-->
        <!-- Load js libraries -->
        <script src="<?=assetPath(SITE_TEMPLATE_PATH.'/dist/js/bundle.min.js');?>"></script>
        <!--dev-->
        <?php if (checkCurrentPageLink("sub-pages")) { ?>
            <!--script for test pages-->
            <script src="<?=SITE_TEMPLATE_PATH; ?>/js/dev.js"></script>
        <?php } ?>
        <!--/dev-->
    </body>
</html>