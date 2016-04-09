<?php

define('SITE_DIR', (($pos = strrpos($_SERVER['PHP_SELF'], 'pages')) === false
    ? '/pages/'
    : substr($_SERVER['PHP_SELF'], 0, $pos + 6)));
define('SITE_TEMPLATE_PATH', substr(SITE_DIR, 0, strrpos(rtrim(SITE_DIR, '/'), '/')));

function checkCurrentPageLink($tofind = 'main')
{
    if (func_num_args() == 0) {
        return checkLinkOnString($tofind);
    } elseif (func_num_args() == 1 && !is_array($tofind)) {
        return checkLinkOnString($tofind);
    } else {
        return checkLinkOnArray(func_get_args());
    }
}

function checkLinkOnArray($findString)
{
    if (!is_array($findString)) {
        return checkLinkOnString($findString);
    } else {
        foreach ($findString as $key => $value) {
            if (checkLinkOnArray($value)) {
                return true;
            }
        }

        return false;
    }
}

function checkLinkOnString($findString)
{
    if (strpos($_SERVER['PHP_SELF'], $findString) !== false) {
        return true;
    }

    return false;
}

/**
 * @param string $filename
 *
 * @return string
 *                must be changed when declared not in template folder
 */
function assetPath($filename)
{
    $manifestPath = realpath(dirname($_SERVER['DOCUMENT_ROOT'].$filename).'/rev-manifest.json');
    if (!file_exists($manifestPath)) {
        return $filename;
    }
    $manifest = json_decode(file_get_contents($manifestPath), true);
    $baseName = basename($filename);
    if (array_key_exists($baseName, $manifest)) {
        return dirname($filename).'/'.$manifest[$baseName];
    }

    return $filename;
}

/**
 * @param $name
 * @param string|array $data filename without .php extension or data array itself
 * @param array $arParams
 * @return mixed
 */
function includeComponent($name, $data = array(), array $arParams = array())
{
    if (is_array($data)) {
        $arResult = $data;
    } else {
        $arResult = include __DIR__.'/data/'.$data.'.php';
    }

    return include __DIR__.'/components/'.$name.'.php';
}
