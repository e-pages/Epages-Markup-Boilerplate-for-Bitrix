        </div>
        <div class="container">
            <div class="row">
                <footer class="footer">

                </footer>
            </div>
        </div>
        <!--[if lt IE 9]>
        <script src="<?=SITE_TEMPLATE_PATH; ?>/js/html5.js"></script>
        <![endif]-->
        <!-- Load js libraries -->
        <script src="<?=SITE_TEMPLATE_PATH; ?>/js/libs.min.js"></script>
        <?php if (checkCurrentPageLink("sub-pages")) { ?>
            <!--script for test pages-->
            <script src="<?=SITE_TEMPLATE_PATH; ?>/js/dev.js"></script>
        <?php } ?>
        <script src="<?=SITE_TEMPLATE_PATH; ?>/js/local.js"></script>
    </body>
</html>