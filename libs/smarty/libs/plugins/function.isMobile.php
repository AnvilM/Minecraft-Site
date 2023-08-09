<?php

function smarty_function_isMobile($params, &$smarty)
{
    $device = $params['device'];
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $device);
}

?>