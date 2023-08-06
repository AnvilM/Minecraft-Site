<?php

function smarty_function_get_avatar($params, &$smarty)
{
    return 'http://'.$_SERVER['SERVER_NAME'].'/API/get.avatar?uuid='.$_SESSION['Login']['Uuid'];
    
}

?>