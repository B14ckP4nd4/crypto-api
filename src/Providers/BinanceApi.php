<?php

namespace BlackPanda\CryptoApi\Providers;

use Binance\API;
use BlackPanda\CryptoApi\Contracts\CoinApi;

class BinanceApi extends CoinApi
{
    public function __construct($api_key , $api_sec , $api_config)
    {
        if($api_key && $api_sec)
            $this->api = new API($api_key, $api_sec);

        if($api_config && file_exists($api_config))
            $this->api = new API($api_config);

        if(!$this->api) throw new \Exception("Api Didn't set properly");
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
