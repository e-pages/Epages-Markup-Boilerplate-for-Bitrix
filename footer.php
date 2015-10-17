        </div>
        <div class="container">
            <div class="row">
                <footer class="footer">

                </footer>
            </div>
        </div>
        <!--[if lt IE 9]>
        <script src="<?php echo SITE_TEMPLATE_PATH; ?>/js/html5.js"></script>
        <![endif]-->
        <!-- Load js libraries -->
        <script src="<?php echo SITE_TEMPLATE_PATH; ?>/js/jquery-2.1.4.min.js"></script>
        <script src="<?php echo SITE_TEMPLATE_PATH; ?>/js/holder.min.js"></script>
        <script src="<?php echo SITE_TEMPLATE_PATH; ?>/js/bootstrap.min.js"></script>
        <?php if (checkCurrentPageLink("sub-pages")) { ?>
            <!--script for test pages-->
            <script src="<?php echo SITE_TEMPLATE_PATH; ?>/js/dev.js"></script>
        <?php } ?>
        <script src="<?php echo SITE_TEMPLATE_PATH; ?>/js/local.js"></script>
    </body>
</html>