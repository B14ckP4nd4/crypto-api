<?php

namespace BlackPanda\CryptoApi\Providers;

use Binance\API;
use BlackPanda\CryptoApi\Contracts\CoinApiInterface;

class BinanceApi implements CoinApiInterface
{
    public function __construct()
    {
        $api = new API(__DIR__ . "\..\\.config\binance-api.json");
        $api->caOverride = true;
        dd($api->coins());
    }

    public function getCoinsList()
    {
        // TODO: Implement getCoinsList() method.
    }

    public function getCoinPrice()
    {
        // TODO: Implement getCoinPrice() method.
    }

    public function livePrice()
    {
        // TODO: Implement livePrice() method.
    }

}
