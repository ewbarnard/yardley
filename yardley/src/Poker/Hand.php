<?php
declare(strict_types=1);

namespace App\Poker;

class Hand
{
    /** @var string[] */
    private $cards;

    public function __construct(array $cards)
    {
        $this->cards = $cards;
    }
}
