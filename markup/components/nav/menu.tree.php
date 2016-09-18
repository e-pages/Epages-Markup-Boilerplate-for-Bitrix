<?php
/**
 * @var array $arParams
 * @var array $arResult
 */
?>
<nav class="<?=$arParams['MODIFIER']?>">
    <ul class="list-group list-unstyled">
        <?php foreach ($arResult as $level1) :?>
            <li class="list-group-item">
                <a href="<?php echo $level1['LINK']?>">
                    <?= $level1['TEXT'] ?>
                </a>
                <?php if (isset($level1['CHILDREN'])) : ?>
                    <span class="badge" data-toggle="collapse"
                          data-target="#<?= $level1['ID'] ?>"
                          aria-expanded="false"
                          aria-controls="<?= $level1['ID'] ?>">
                            <span class="fa fa-caret-down"></span>
                    </span>
                <?php endif; ?>
                <?php if (isset($level1['CHILDREN'])) :?>
                    <ul class="list-group list-unstyled collapse" <?php if (isset($level1['CHILDREN'])) :?>id="<?= $level1['ID']?>"<?php endif; ?>>
                        <?php foreach ($level1['CHILDREN'] as $level2) :?>
                            <li class="list-group-item">
                                <a href="<?php echo $level2['LINK']?>">
                                    <?= $level2['TEXT'] ?>
                                </a>
                                <?php if (isset($level2['CHILDREN'])) : ?>
                                    <span class="badge" data-toggle="collapse"
                                          data-target="#<?= $level2['ID'] ?>"
                                          aria-expanded="false"
                                          aria-controls="<?= $level2['ID'] ?>">
                                            <span class="fa fa-caret-down"></span>
                                    </span>
                                <?php endif; ?>
                                <?php if (isset($level2['CHILDREN'])) :?>
                                    <ul class="list-group list-unstyled collapse"
                                        <?php if (isset($level2['CHILDREN'])) :?>id="<?= $level2['ID']?>"<?php endif; ?>>
                                        <?php foreach ($level2['CHILDREN'] as $level3) :?>
                                            <li class="list-group-item">
                                                <a href="<?php echo $level3['LINK']?>">
                                                    <?= $level3['TEXT'] ?>
                                                </a>
                                                <?php if (isset($level3['CHILDREN'])) : ?>
                                                    <span class="badge" data-toggle="collapse"
                                                          data-target="#<?= $level3['ID'] ?>"
                                                          aria-expanded="false"
                                                          aria-controls="<?= $level3['ID'] ?>">
                                                            <span class="fa fa-caret-down"></span>
                                                    </span>
                                                <?php endif; ?>
                                                <?php if (isset($level3['CHILDREN'])) :?>
                                                    <ul class="list-group list-unstyled collapse"
                                                        <?php if (isset($level3['CHILDREN'])) :?>id="<?= $level3['ID']?>"<?php endif; ?>>
                                                        <?php foreach ($level3['CHILDREN'] as $level4) :?>
                                                            <li class="list-group-item">
                                                                <a href="<?php echo $level4['LINK']?>">
                                                                    <?= $level4['TEXT'] ?>
                                                                </a>
                                                                <?php if (isset($level4['CHILDREN'])) : ?>
                                                                    <span class="badge" data-toggle="collapse"
                                                                          data-target="#<?= $level4['ID'] ?>"
                                                                          aria-expanded="false"
                                                                          aria-controls="<?= $level4['ID'] ?>">
                                                                            <span class="fa fa-caret-down"></span>
                                                                    </span>
                                                                <?php endif; ?>
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
