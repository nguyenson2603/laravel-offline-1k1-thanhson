<?php

namespace App\Helpers;

class Highlight
{
    public static function show($value, $params, $filter)
    {
        if ($params['search'] == '') {
            return $value;
        } if ($params['filter'] == '' || $params['filter'] == 'all' || $params['filter'] == $filter) {
            return preg_replace("/" . preg_quote($params['search'], "/") . "/i", "<span class='bg-info'>$0</span>", $value);
        }
        return $value;
    }
}
