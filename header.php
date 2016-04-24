<?php
require("lib.php");
require("constants.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page title</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles for current site -->
    <link rel="stylesheet" href="<?=assetPath(SITE_TEMPLATE_PATH.'/dist/css/bundle.min.css');?>"/>
    <!--[if lte IE 9]>
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/ie.css"/>
    <![endif]-->
    
    <!--dev-->
    <?php if (checkCurrentPageLink("sub-pages")) { ?>
        <!--styles for test page-->
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/dist/demo/bundle.min.css">
    <?php } ?>
    <!--/dev-->

</head>
<body>
<!--[if lte IE 8]>
    <div style="background: #eeeeee; font-family: Arial, sans-serif;">
    <p style="font-size: 20px; color: red; text-align:center; padding: 10px 80px 0;">Обратите внимание, Ваш браузер устарел!</p>
    <p style="padding: 10px 80px 0;">
        Вы используете устаревшую версию браузера Internet Explorer.
        Данная версия браузера не поддерживает многие современные технологии.
        Страницы сайта будут отображаться некорректно и не все функции могут работать корректно.
        Для решения проблемы установите любой современный браузер
        (<a href="https://www.google.com/intl/en/chrome/browser/">Google Chrome</a>,
        <a href="http://www.mozilla.org/ru/firefox/new/">Firefox</a>,
        <a href="http://www.opera.com/ru">Opera</a>) или обновите свой браузер до
        <a href="http://windows.microsoft.com/ru-ru/internet-explorer/download-ie">последней версии</a>.
    </p>
    <hr style="border-color: #cccccc;">
    </div>
<![endif]-->
<div class="page-wrapper">
    <div class="container">
        <div class="row">
            <header class="header"></header>
        </div>
    </div>
