<?php

class HelperIgosja
{
    public static function productName($o_product)
    {
        $name = $o_product->name;
        if (isset($o_product->option[0])) {
            $name = $name . ', ' . $o_product->option[0]->name;
        }
        return $name;
    }

    public static function productOption($o_product)
    {
        if (isset($o_product->option[0])) {
            $option = $o_product->option[0]->id;
        } else {
            $option = 0;
        }
        return $option;
    }

    public static function productPrice($o_product)
    {
        if (isset($o_product->option[0])) {
            if (0 == $o_product->option[0]->plus) {
                $price = $o_product->price - $o_product->option[0]->price;
            } elseif (1 == $o_product->option[0]->plus) {
                $price = $o_product->price + $o_product->option[0]->price;
            } else {
                $price = $o_product->price;
            }
        } else {
            $price = $o_product->price;
        }
        return $price;
    }
}