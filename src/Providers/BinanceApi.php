<?php

namespace BlackPanda\CryptoApi\Providers;

use Binance\API;
use BlackPanda\CryptoApi\Contracts\CoinApi;
use BlackPanda\CryptoApi\Contracts\CoinApiInterface;
use BlackPanda\CryptoApi\utils\Math;
use Illuminate\Support\Collection;

class BinanceApi extends CoinApi implements CoinApiInterface
{
    private $BTC_PRICE = null;
    public function __construct($api_key , $api_sec , $api_config = null)
    {
        if($api_key && $api_sec)
            $this->api = new API($api_key, $api_sec);

        if($api_config && file_exists($api_config))
            $this->api = new API($api_config);
    }

    private function isAPIStatusOK(){
        if(!$this->api && $this->api->systemStatus()['api']['status'] == 'ping ok')
            return true;
    }

    private function coinsList(){
        $coinsList = [];
        foreach ($this->api->coins() as $coin){
            if($coin['isLegalMoney'])
                continue;
            $coinsList[$coin['coin']] = [
                'symbol' => $coin['coin'],
                'name' => $coin['name'],
            ];
        }

        return collect($coinsList);
    }

    private function getPairs() : Collection {
        $pairs = [];
        foreach ($this->api->exchangeInfo()['symbols'] as $pair){
            $pairs[$pair['symbol']] = [
              'symbol' => $pair['symbol'],
              'baseAsset' => $pair['baseAsset'],
              'quoteAsset' => $pair['quoteAsset'],
              'baseAssetPrecision' => $pair['baseAssetPrecision'],
              'quoteAssetPrecision' => $pair['quoteAssetPrecision'],
            ];
        }

        return collect($pairs);
    }

    public function getCoinPriceInUSDT($coin)
    {
        $pair = strtoupper($coin) . "USDT";
        $price = $this->api->price($pair);
        if($price)
        {
            return $price;
        }

        return false;
    }

    public function getCoinPriceInBTC($coin)
    {
        $pair = strtoupper($coin) . "BTC";
        $price = $this->api->price($pair);
        if($price)
        {
            return $price;
        }

        return false;
    }
}
