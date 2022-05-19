<?php

require_once 'autoload.php';

use ChristopherGomes\Bank\Models\{Owner, Document, Account, AccountChecking, Address};

$address = new Address('Goiânia', 'Jd Oliv', 'B', 'S/N');

$vinicius = new Owner('Vinicius Dias', new Document('123.456.789-10'), $address);
$primeiraAccount = new AccountChecking($vinicius);
$primeiraAccount->deposit(500);
$primeiraAccount->draw(300); // isso é ok

echo $primeiraAccount->getBalance() . PHP_EOL;

$patricia = new Owner('Patricia', new Document('698.549.548-10'), $address);
$segundaAccount = new AccountChecking($patricia);
var_dump($segundaAccount);

$outra = new AccountChecking(new Owner('Abcdefg', new Document('123.654.789-01'), $address));
unset($segundaAccount);
echo Account::getNumberOfAccounts();
