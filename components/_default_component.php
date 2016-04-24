<?php
/**
 * @var array $arParams
 * @var array $arResult
 */
?>
Hello world!
<br>
<pre>$arParams = <?php var_dump($arParams)?></pre>
<pre>$arResult = <?php var_dump($arResult)?></pre>

<?php includeComponent('nav/menu', 'menu/simple', ['MODIFIER' => 'navbar-fixed-bottom']);?>