<?php
declare(strict_types=1);

namespace App;
use DateTime as DT;

new DT();
class Account
{
    public const INTEREST_RATE = 2;
    public static int $count = 0;
    public SocialMedia $socialMedia;

    public function __construct(
      public string $name,
      public float $balance
    ) {
        $this->socialMedia = new SocialMedia();
        self::$count++;
    }

    public function deposit(float $amount)
    {
        $this->balance += $amount;
        return $this;
    }

}