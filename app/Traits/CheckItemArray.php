<?php

namespace App\Traits;

trait CheckItemArray
{
    public function itemInArrayIsNull($arr)
    {
        return array_reduce(
            $arr,
            function ($result, $elem) {
                return $result && ($elem === null);
            },
            true
        );
    }
}
