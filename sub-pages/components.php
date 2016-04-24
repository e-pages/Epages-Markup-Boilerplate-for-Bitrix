<?php require("../header.php"); ?>

<div id="top"></div>
<!-- Content -->
<nav class="table-of-content">
    <ul>
        <li>
            <a href="#top">Top</a>
        </li>
        <li>
            <a href="<?=SITE_TEMPLATE_PATH; ?>/index.php">Home</a>
        </li>
        <li>
            <a href="<?=SITE_TEMPLATE_PATH; ?>/pages/main.php">Main page</a>
        </li>
    </ul>
    <ul class="nav">
        <li><a href="#default">Default Component</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#menu-4-level">Menu 4 level</a></li>
        <li><a href="#menu-2-level">Menu 2 level</a></li>
    </ul>
</nav>

<!-- Page -->
<div class="test-page-content">
    <div class="container">
        <div class="row">
            <div class="col-xs-10">
                <h1 id="default">Default Component</h1>
                <div>
                    <?php includeComponent('_default_component'); ?>
                </div>
                <h1 id="menu">Menu</h1>
                <div>
                    <?php includeComponent('nav/menu', 'menu/simple', ['MODIFIER' => 'green']);?>
                </div>
                <h1 id="menu-4-level">Menu 4 level</h1>
                <div>
                    <?php includeComponent('nav/menu.tree', 'menu/tree-4-level', ['MODIFIER' => 'bg-warning']);?>
                </div>
                <h1 id="menu-2-level">Menu 2 level</h1>
                <div>
                    <?php includeComponent('nav/menu.tree', 'menu/tree-2-level', ['MODIFIER' => 'bg-success']);?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require("../footer.php") ?>
