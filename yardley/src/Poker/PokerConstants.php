<?php
declare(strict_types=1);

namespace App\Poker;

interface PokerConstants
{
    public const POKER_RANK_ROYAL_FLUSH = 1;
    public const POKER_RANK_STRAIGHT_FLUSH = 2;
    public const POKER_RANK_FOUR_OF_A_KIND = 3;
    public const POKER_RANK_FULL_HOUSE = 4;
    public const POKER_RANK_FLUSH = 5;
    public const POKER_RANK_STRAIGHT = 6;
    public const POKER_RANK_THREE_OF_A_KIND = 7;
    public const POKER_RANK_TWO_PAIR = 8;
    public const POKER_RANK_ONE_PAIR = 9;
    public const POKER_RANK_HIGH_CARD = 10;
    public const POKER_HAND_NAME = [
        self::POKER_RANK_ROYAL_FLUSH => 'Royal Flush',
        self::POKER_RANK_STRAIGHT_FLUSH => 'Straight Flush',
        self::POKER_RANK_FOUR_OF_A_KIND => 'Four of a Kind',
        self::POKER_RANK_FULL_HOUSE => 'Full House',
        self::POKER_RANK_FLUSH => 'Flush',
        self::POKER_RANK_STRAIGHT => 'Straight',
        self::POKER_RANK_THREE_OF_A_KIND => 'Three of a Kind',
        self::POKER_RANK_TWO_PAIR => 'Two Pair',
        self::POKER_RANK_ONE_PAIR => 'One Pair',
        self::POKER_RANK_HIGH_CARD => 'High Card',
    ];
}
