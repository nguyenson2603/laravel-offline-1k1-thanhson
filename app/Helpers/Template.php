<?php

namespace App\Helpers;

class Template
{
    public static function showButtonStatus($param, $options = null)
    {
        $status = $param->status;
        if($options['task'] == 'product'){
            $link = route('admin.products.status', ['product' => $param]);
        }if ($options['task'] == 'category') {
            $link = route('admin.categories.status', ['category' => $param]);
        }
        $class = 'btn-primary';
        $text = 'Chưa kích hoạt';
        if($status == 1){
            $class = 'btn-warning';
            $text = 'Kích hoạt';
        }
        $xhtml = null;
        $xhtml = sprintf('<a href="%s" class="btn %s"><i class="fas fa-exchange">%s</i></a>', $link, $class, $text);
        return $xhtml;
    }
}
