<?php

function RouteRandomPass($length)
{
    $characters = 'sdfdsjlkfdsjlvkdnmfv,mkdlkfvjsdfk';

    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $random = rand(0, strlen($characters) - 1);
        $password .= $characters[$random];
    }

    return $password;
}

echo RouteRandomPass(8);