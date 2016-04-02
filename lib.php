<?php 
function checkCurrentPageLink($tofind = 'main') {
    if (func_num_args() == 0)
        return checkLinkOnString($tofind);
    else if (func_num_args() == 1 && !is_array($tofind)) {
        return checkLinkOnString($tofind);
    } else {
        return checkLinkOnArray(func_get_args());
    }
    return false;
}
function checkLinkOnArray ($findString) {
    if (!is_array($findString)) {
        return checkLinkOnString($findString);
    } else {
        foreach ($findString as $key => $value) {
            if (checkLinkOnArray($value))
                return true;
        }
    }
}
function checkLinkOnString($findString) {
    if (strpos($_SERVER['PHP_SELF'], $findString) !== FALSE)
        return true;
    return false;
}

/**
 * @param  string  $filename
 * @return string
 * must be changed when declared not in template folder
 */
function assetPath($filename) {
    /*
    use this with bitrix
    $manifestPath = realpath(dirname($_SERVER['DOCUMENT_ROOT'].$filename).'/rev-manifest.json');
    */
    $manifestPath = realpath(dirname(__DIR__.str_replace(SITE_TEMPLATE_PATH, '', $filename)).'/rev-manifest.json');
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
