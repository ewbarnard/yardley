<?php
declare(strict_types=1);

namespace App\Poker;

use InvalidArgumentException;
use function array_key_exists;

class HandRank implements PokerConstants
{
    /** @var int */
    private $rank;

    public function __construct(int $rank)
    {
        $this->rank = $rank;
        $this->validateRank();
    }

    /**
     * @return void
     * @throws \InvalidArgumentException
     */
    private function validateRank(): void
    {
        if (!array_key_exists($this->rank, self::POKER_HAND_NAME)) {
            throw new InvalidArgumentException('Invalid rank: ' . $this->rank);
        }
    }

    public function getRank(): int
    {
        return $this->rank;
    }

    public function getDescription(): string
    {
        return self::POKER_HAND_NAME[$this->rank];
    }
}
