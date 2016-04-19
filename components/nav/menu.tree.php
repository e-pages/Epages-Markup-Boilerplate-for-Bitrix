<?php
/**
 * @var array $arParams
 * @var array $arResult
 */
?>
<nav class="<?=$arParams['MODIFIER']?>">
    <ul>
        <?php foreach ($arResult as $level1) :?>
            <li>
                <a href="<?=$level1['LINK']?>"<?=($level1['SELECTED']) ? ' class="active"' : ''?>><?=$level1['TEXT']?></a>
                <?php if (isset($level1['CHILDREN'])) :?>
                    <ul>
                        <?php foreach ($level1['CHILDREN'] as $level2) :?>
                            <li>
                                <a href="<?=$level2['LINK']?>"<?=($level2['SELECTED']) ? ' class="active"' : ''?>
                                ><?=$level2['TEXT']?></a>
                                <?php if (isset($level2['CHILDREN'])) :?>
                                    <ul>
                                        <?php foreach ($level2['CHILDREN'] as $level3) :?>
                                            <li>
                                                <a href="<?=$level3['LINK']?>"
                                                    <?=($level3['SELECTED']) ? ' class="active"' : ''?>
                                                ><?=$level3['TEXT']?></a>
                                                <?php if (isset($level3['CHILDREN'])) :?>
                                                    <ul>
                                                        <?php foreach ($level3['CHILDREN'] as $level4) :?>
                                                            <li>
                                                                <a href="<?=$level4['LINK']?>"
                                                                    <?=($level4['SELECTED']) ? ' class="active"' : ''?>
                                                                ><?=$level4['TEXT']?></a>
                                                            </li>
                                                        <?php endforeach;?>
                                                    </ul>
                                                <?php endif;?>
                                            </li>
                                        <?php endforeach;?>
                                    </ul>
                                <?php endif;?>
                            </li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>
            </li>
        <?php endforeach;?>
    </ul>
</nav>
