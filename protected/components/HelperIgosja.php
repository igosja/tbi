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

    public static function optionPrice($o_product, $o_option)
    {
        $price = 0;
        foreach ($o_product->option as $item) {
            if ($item->id == $o_option->id) {
                if (0 == $item->plus) {
                    $price = $o_product->price - $item->price;
                } elseif (1 == $item->plus) {
                    $price = $o_product->price + $item->price;
                } else {
                    $price = $item->price;
                }
            }
        }
        return $price;
    }

    public static function formatPrice($price, $currency)
    {
        $o_currency = Currency::model()->findByPk($currency);
        return number_format($price / $o_currency->rate, 2, ',', ' ') . ' ' . $o_currency->name;
    }
}