<?php
require 'lib.php';
require 'constants.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page title</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?=SITE_DIR?>favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH.'/css/bundle.min.css'?>"/>
</head>
<body>
<?php include 'old-browser-warning.php'; ?>
<header class="header">
    <?php
    includeComponent('nav/menu', 'menu/simple')
    ?>
    <?php if (isOnPage('main')) :?>
        <div class="jumbotron">
            <div class="container">
                <h1>Hello, world!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Accusamus cum, cupiditate dignissimos id minima mollitia nam odio omnis perferendis
                    quaerat quas quos sequi sint tempora, tenetur vel voluptas! Architecto, modi!</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
            </div>
        </div>
    <?php endif;?>
</header>
<div class="content">
<div class="container">
