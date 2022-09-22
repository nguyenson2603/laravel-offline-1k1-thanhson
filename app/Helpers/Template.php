<?php

namespace App\Helpers;

class Template
{
    public static function showButtonStatus($product)
    {
        $status = $product->status;
        $link = route('products.status', ['product' => $product]);
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
