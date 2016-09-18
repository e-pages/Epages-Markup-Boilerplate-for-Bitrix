<?php

define('SITE_TEMPLATE_PATH', substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/markup')));
define('SITE_DIR', SITE_TEMPLATE_PATH.'/markup/pages/');

/**
 * @param string $pageName
 *
 * @return bool
 */
function isOnPage($pageName = 'main')
{
    return (false !== strpos($_SERVER['PHP_SELF'], $pageName));
}

/**
 * @param $name
 * @param string $dataFilePath data file path relative to markup/data/ without .php extension
 * @param array $arParams
 * @return mixed
 */
function includeComponent($name, $dataFilePath = '', array $arParams = array())
{
    $defaultParameters = include __DIR__ . '/default-parameters/.global.php';
    $defaultParametersFileName = __DIR__ . '/default-parameters/' .$name.'.php';
    if (is_file($defaultParametersFileName)) {
        $defaultParameters = array_merge($defaultParameters, include $defaultParametersFileName);
    }
    $arParams = array_merge($defaultParameters, $arParams);

    $arResult = array();
    $dataFileName = __DIR__.'/data/'.$dataFilePath.'.php';
    if (is_file($dataFileName)) {
        $arResult = include $dataFileName;
    }

    return include __DIR__ . '/components/' .$name.'.php';
}
