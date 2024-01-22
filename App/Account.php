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
      private string $name,
      private float $balance
    ) {
        $this->socialMedia = new SocialMedia();
        self::$count++;
    }

    public function getBalance(){
        return "$" . $this->balance;
    }

    public function setBalance(float $balance)
    {
        if ($balance < 0){
            return;
        }

        $this->balance = $balance;
        $this->sendEmail();
    }

    public function deposit(float $amount)
    {
        $this->balance += $amount;
         return $this;
    }

    private function sendEmail()
    {

    }

}