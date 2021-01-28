<?php
declare(strict_types=1);

namespace App\Poker;

class EvaluateHand01
{
    /** @var \App\Poker\Hand */
    private $hand;

    public function __construct(Hand $hand)
    {
        $this->hand = $hand;
    }

    public function isRoyalFlush(): bool
    {
        return false;
    }
}
