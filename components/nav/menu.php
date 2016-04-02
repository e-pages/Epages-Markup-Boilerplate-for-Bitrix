<?php
/**
 * @var array $arParams
 * @var array $arResult
 */
?>
<nav class="navbar navbar-default <?=$arParams['MODIFIER']?>">
    <ul class="nav navbar-nav">
        <?php foreach ($arResult as $menuItem) :?>
            <li class="menu__item<?=$menuItem['SELECTED'] ? ' active':''?>">
                <a href="<?=$menuItem['LINK']?>"><?=$menuItem['TEXT']?></a>
            </li>
        <?php endforeach;?>
    </ul>
</nav>
