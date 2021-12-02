# bitcoinvn-php

The BitcoinVN SDK helps you to integrate with the [BitcoinVN API](https://bitcoinvn.io/api/doc).

## Installation

Run ``composer install bitcoinvn/bitcoinvn-php``

## Usage

Generate an API key at https://bitcoinvn.io/api-keys

### Examples

#### Get info

Object containing all sorts of information about assets and transfer methods supported on the exchange.

You can use this to check fees for example.

```php
$bitcoinVn = new \BitcoinVN\BitcoinVN('YOUR_API_KEY');
$info = $bitcoinVn->info();
```

#### Get balances

Check your balances on the exchange.

```php
$bitcoinVn = new \BitcoinVN\BitcoinVN('YOUR_API_KEY');
$balances = $bitcoinVn->balances();
foreach ($balances as $asset => $balance) {
    echo "My {$asset} balance: {$balance}\n";
}

#### Buy 0.1 BTC

```php
$bitcoinVn = new \BitcoinVN\BitcoinVN('YOUR_API_KEY');
$quote = $bitcoinVn->quote('vnd', 'btc', null, 0.1);
$order = $bitcoinVn->fixedSwap($quote->getId(), '12c6DSiU4Rq3P4ZxziKxzrL5LmMBrzjrJX');
echo "Send {$order->getDepositAmount()} VND in order to receive 0.1 BTC.";
```

#### Buy BTC for 1,000,000 VND

```php
$bitcoinVn = new \BitcoinVN\BitcoinVN('YOUR_API_KEY');
$quote = $bitcoinVn->quote('vnd', 'btc', 1_000_000);
$order = $bitcoinVn->fixedSwap($quote->getId(), '12c6DSiU4Rq3P4ZxziKxzrL5LmMBrzjrJX');
echo "Send 1,000,000 VND in order to receive {$order->getSettleAmount()} BTC.";
```

#### Sell any amount of BTC for VND

You don't necessarily need a quote to create an order. With a variable order the final settle amount will be determined upon confirmation of your payment.

```php
$bitcoinVn = new \BitcoinVN\BitcoinVN('YOUR_API_KEY');
$order = $bitcoinVn->variableSwap('btc', 'vnd', [
    'bank' => 'vietcombank',
    'accountNumber' => '0123456789',
    'accountHolder' => 'Satoshi Nakamoto'
]);
echo "Send any amount of BTC to {$order->getSettleData()['address']} in order to receive VND.";
```
