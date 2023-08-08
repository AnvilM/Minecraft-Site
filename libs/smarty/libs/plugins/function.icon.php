<?php

function smarty_function_icon($params, &$smarty)
{
    $icon = $params['icon'];
    return '/assets/icons/'.$icon.'.png';
}

?>