<?php
declare(strict_types=1);

namespace App\Poker;

use InvalidArgumentException;

class EvaluateHand implements PokerConstants
{
    /** @var \App\Poker\Hand */
    private $hand;

    public function __construct(Hand $hand)
    {
        $this->hand = $hand;
    }

    public function evaluate(): HandRank
    {
        // Intentionally violating PSR-12 structure
        if ($this->isRoyalFlush()) return new HandRank(self::POKER_RANK_ROYAL_FLUSH);
        if ($this->isStraightFlush()) return new HandRank(self::POKER_RANK_STRAIGHT_FLUSH);
        if ($this->isFourOfAKind()) return new HandRank(self::POKER_RANK_FOUR_OF_A_KIND);
        if ($this->isFullHouse()) return new HandRank(self::POKER_RANK_FULL_HOUSE);
        if ($this->isFlush()) return new HandRank(self::POKER_RANK_FLUSH);
        if ($this->isStraight()) return new HandRank(self::POKER_RANK_STRAIGHT);
        if ($this->isThreeOfAKind()) return new HandRank(self::POKER_RANK_THREE_OF_A_KIND);
        if ($this->isTwoPair()) return new HandRank(self::POKER_RANK_TWO_PAIR);
        if ($this->isOnePair()) return new HandRank(self::POKER_RANK_ONE_PAIR);
        if ($this->isHighCard()) return new HandRank(self::POKER_RANK_HIGH_CARD);
        throw new InvalidArgumentException('Unable to rank hand');
    }

    public function isRoyalFlush(): bool
    {
        return false;
    }

    public function isStraightFlush(): bool
    {
        return false;
    }

    public function isFourOfAKind(): bool
    {
        return false;
    }

    public function isFullHouse(): bool
    {
        return false;
    }

    public function isFlush(): bool
    {
        return false;
    }

    public function isStraight(): bool
    {
        return false;
    }

    public function isThreeOfAKind(): bool
    {
        return false;
    }

    public function isTwoPair(): bool
    {
        return false;
    }

    public function isOnePair(): bool
    {
        return false;
    }

    public function isHighCard(): bool
    {
        return false;
    }
}
