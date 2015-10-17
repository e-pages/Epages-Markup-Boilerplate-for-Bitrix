<?php require("../header.php"); ?>

<div id="top"></div>
<!-- Content -->
<nav class="table-of-content">
    <ul>
        <li>
            <a href="#top">Top</a>
        </li>
        <li>
            <a href="<?php echo SITE_TEMPLATE_PATH; ?>">Home</a>
        </li>
        <li>
            <a href="<?php echo SITE_TEMPLATE_PATH; ?>/pages/main.php">Main page</a>
        </li>
    </ul>
    <ul class="nav">
        <li><a href="#default">Default Component</a></li>
    </ul>
</nav>

<!-- Page -->
<div class="test-page-content">
    <div class="container">
        <h1 id="default">Sidebar</h1>
        <div class="row">
            <?php require(SITE_DIR . "/components/_default_component.php"); ?>
        </div>
    </div>
</div>

<?php require("../footer.php") ?>
