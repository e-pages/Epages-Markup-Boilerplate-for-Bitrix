<?php
/**
 * @var array $arParams
 * @var array $arResult
 */
?>
<nav class="navbar navbar-default menu menu_horizontal">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php foreach ($arResult as $menuItem) :?>
                    <?php
                    $itemModifiers = '';
                    if ($menuItem['SELECTED']) {
                        $itemModifiers .= ' active';
                    }
                    if (isset($menuItem['CHILDREN'])) {
                        $itemModifiers .= ' dropdown';
                    }
                    ?>
                    <li class="menu__item<?= $itemModifiers ?>">
                        <a href="<?=$menuItem['LINK']?>"><?=
                            $menuItem['TEXT']
                            ?><?=
                            $menuItem['SELECTED']
                                ? ' <span class="sr-only">(current)</span>'
                                :''
                        ?></a>
                        <?php if (isset($menuItem['CHILDREN'])) :?>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php foreach ($menuItem['CHILDREN'] as $itemChild) :?>
                                    <li<?=$itemChild['SELECTED'] ? ' class="active"':''?>>
                                        <a href="<?=$itemChild['LINK']?>"><?=$itemChild['TEXT']?></a>
                                    </li>
                                <?php endforeach;?>
                            </ul>
                        <?php endif;?>
                    </li>
                <?php endforeach;?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
