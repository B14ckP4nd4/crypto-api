<?php


namespace BlackPanda\CryptoApi\Contracts;


interface CoinApiInterface
{
    public function getCoinPriceInUSDT($symbol);

    public function getCoinPriceInBTC($symbol);
}
