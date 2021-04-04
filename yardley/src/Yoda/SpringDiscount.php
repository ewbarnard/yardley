<?php

declare(strict_types=1);

namespace App\Yoda;

class SpringDiscount
{
    /** @var string */
    private static $season;

    public static function springDiscount(string $season): float
    {
        self::$season = $season;
        $discount = 0.0;
        if ('Spring 2021' === $season) {
            $discount = 0.2;
        }
        return $discount;
    }
}
