<?php

namespace Src;

class Search
{
    public static function search($str)
    {
        $openElement = substr_count($str, '(');
        $closeElement = substr_count($str, ')');

        if ($openElement !== $closeElement) {
            return false;
        }

        $count = 0;
        foreach (str_split($str) as $elem) {
            if ($elem === '(') {
                $count++;
            } elseif ($elem === ')') {
                $count--;
            }
            if ($count < 0) {
                return false;
            }
        }

        return $count === 0;
    }
}