<?php
declare(strict_types=1);

spl_autoload_register(function ($class){
    $formattedClass = str_replace("\\", "/", $class);
   $path = "{$formattedClass}.php";
   require_once $path;
});

Use App\{Account, SocialMedia, Utility};

$myAccount = new Account("John", 20);

$myAccount?->deposit(50)->deposit(30);

//var_dump(Account::$count);
//Utility::printArr([12,432,543,5634]);

echo $myAccount->getBalance();