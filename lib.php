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
?>