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
                <a <?php if (isset($level1['CHILDREN'])) :?>class="active" data-toggle="collapse"
                   href="#<?= $level1['ID'] ?>" aria-expanded="false" aria-controls="<?= $level1['ID'] ?>"
                    <?php else : ?>href="<?= $level1['LINK']?>"<?php endif; ?>>
                    <?= $level1['TEXT']?>
                    <?php if (isset($level1['CHILDREN'])) :?><span class="caret"><?php endif; ?></span>
                </a>
                <?php if (isset($level1['CHILDREN'])) :?>
                    <ul <?php if (isset($level1['CHILDREN'])) :?>id="<?= $level1['ID']?>" class="collapse"<?php endif; ?>>
                        <?php foreach ($level1['CHILDREN'] as $level2) :?>
                            <li>
                                <a <?php if (isset($level2['CHILDREN'])) :?>class="active" data-toggle="collapse"
                                   href="#<?= $level2['ID'] ?>" aria-expanded="false" aria-controls="<?= $level2['ID'] ?>"
                                   <?php else : ?>href="<?= $level2['LINK']?>"<?php endif; ?>>
                                    <?= $level2['TEXT']?>
                                    <?php if (isset($level2['CHILDREN'])) :?><span class="caret"><?php endif; ?></span>
                                </a>
                                <?php if (isset($level2['CHILDREN'])) :?>
                                    <ul <?php if (isset($level2['CHILDREN'])) :?>id="<?= $level2['ID']?>"
                                        class="collapse"<?php endif; ?>>
                                        <?php foreach ($level2['CHILDREN'] as $level3) :?>
                                            <li>
                                                <a <?php if (isset($level3['CHILDREN'])) :?>class="active" data-toggle="collapse"
                                                   href="#<?= $level3['ID'] ?>" aria-expanded="false" aria-controls="<?= $level3['ID'] ?>"
                                                   <?php else : ?>href="<?= $level3['LINK']?>"<?php endif; ?>>
                                                    <?= $level3['TEXT']?>
                                                    <?php if (isset($level3['CHILDREN'])) :?><span class="caret"><?php endif; ?></span>
                                                </a>
                                                <?php if (isset($level3['CHILDREN'])) :?>
                                                    <ul <?php if (isset($level3['CHILDREN'])) :?>id="<?= $level3['ID']?>"
                                                        class="collapse"<?php endif; ?>>
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
