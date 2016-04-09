<?php require("../header.php"); ?>

<div id="top"></div>
<!-- Content -->
<nav class="table-of-content">
    <ul>
        <li>
            <a href="#top">Top</a>
        </li>
        <li>
            <a href="<?=SITE_TEMPLATE_PATH; ?>">Home</a>
        </li>
        <li>
            <a href="<?=SITE_TEMPLATE_PATH; ?>/pages/main.php">Main page</a>
        </li>
    </ul>
    <ul class="nav">
        <li><a href="#default">Default Component</a></li>
    </ul>
</nav>

<!-- Page -->
<div class="test-page-content">
    <div class="container">
        <h1 id="default">Default Component</h1>
        <div class="row">
            <?php includeComponent('_default_component'); ?>
        </div>
        <h1 id="default">Menu</h1>
        <div class="row">
            <?php includeComponent('nav/menu', 'menu/simple', ['MODIFIER' => 'green']);?>
        </div>
        <h1 id="default">Menu multilevel tree</h1>
        <div class="row">
            <?php includeComponent('nav/menu.tree', 'menu/multilevel.tree', ['MODIFIER' => 'green']);?>
        </div>
        <h1 id="default">Menu multilevel bitrix</h1>
        <div class="row">
            <?php includeComponent('nav/menu.multilevel-bitrix', 'menu/multilevel', ['MODIFIER' => 'green']);?>
        </div>
    </div>
</div>

<?php require("../footer.php") ?>
