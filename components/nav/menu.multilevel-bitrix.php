<?php
/**
 * @var array $arParams
 * @var array $arResult
 */
?>
<nav>
    <ul>
        <?php foreach ($arResult as $menuItem) :?>
            <li class="menu__item<?=$menuItem['SELECTED'] ? ' active':''?>">
                <?php if (1 == $menuItem['PARAMS']['DEPTH_LEVEL']) :?>
                    * <a href="<?=$menuItem['LINK']?>"><?=$menuItem['TEXT']?></a>
                <?php endif;?>
                <?php if (2 == $menuItem['PARAMS']['DEPTH_LEVEL']) :?>
                    ** <a href="<?=$menuItem['LINK']?>"><?=$menuItem['TEXT']?></a>
                <?php endif;?>
                <?php if (3 == $menuItem['PARAMS']['DEPTH_LEVEL']) :?>
                    *** <a href="<?=$menuItem['LINK']?>"><?=$menuItem['TEXT']?></a>
                <?php endif;?>
                <?php if (4 == $menuItem['PARAMS']['DEPTH_LEVEL']) :?>
                    **** <a href="<?=$menuItem['LINK']?>"><?=$menuItem['TEXT']?></a>
                <?php endif;?>
            </li>
        <?php endforeach;?>
    </ul>
</nav>
