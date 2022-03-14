<?php


namespace BlackPanda\CryptoApi\Commands;


use BlackPanda\CryptoApi\Providers\BinanceApi;
use Illuminate\Console\Command;

class LivePricesUpdater extends Command
{

    protected $signature = "livePrice:update {provider=binance}";

    protected $description = "update the prices using webSocket";


    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $provider = strtolower($this->argument('provider'));

        switch ($provider):
            case 'binance':
                $this->initBinanceSocket();
                break;
            default:
                $this->initBinanceSocket();
        endswitch;
    }

    private function initBinanceSocket()
    {
        $binance = new BinanceApi(config('coinApi.binance.api_key'),config('coinApi.binance.api_sec'));
        return $binance->livePrice();
    }

}
