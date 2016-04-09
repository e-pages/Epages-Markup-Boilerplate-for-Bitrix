<?php
/**
 * @var array $arParams
 * @var array $arResult
 */
?>
<nav class="<?=$arParams['MODIFIER']?>">
    <ul>
        <?foreach($arResult as $level1):?>
            <li>
                <a href="<?=$level1['LINK']?>"<?=($level1["SELECTED"])?' class="active"':''?>><?=$level1["TEXT"]?></a>
                <?if(isset($level1['CHILDREN'])):?>
                    <ul>
                        <?foreach($level1['CHILDREN'] as $level2):?>
                            <li>
                                <a href="<?=$level2['LINK']?>"<?=($level2["SELECTED"])?' class="active"':''?>
                                ><?=$level2["TEXT"]?></a>
                                <?if(isset($level2['CHILDREN'])):?>
                                    <ul>
                                        <?foreach($level2['CHILDREN'] as $level3):?>
                                            <li>
                                                <a href="<?=$level3['LINK']?>"
                                                    <?=($level3["SELECTED"])?' class="active"':''?>
                                                ><?=$level3["TEXT"]?></a>
                                                <?if(isset($level3['CHILDREN'])):?>
                                                    <ul>
                                                        <?foreach($level3['CHILDREN'] as $level4):?>
                                                            <li>
                                                                <a href="<?=$level4['LINK']?>"
                                                                    <?=($level4["SELECTED"])?' class="active"':''?>
                                                                ><?=$level4["TEXT"]?></a>
                                                            </li>
                                                        <?endforeach;?>
                                                    </ul>
                                                <?endif;?>
                                            </li>
                                        <?endforeach;?>
                                    </ul>
                                <?endif;?>
                            </li>
                        <?endforeach;?>
                    </ul>
                <?endif;?>
            </li>
        <?endforeach;?>
    </ul>
</nav>
