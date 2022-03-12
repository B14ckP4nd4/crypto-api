<?php


namespace BlackPanda\CryptoApi;


use Illuminate\Support\ServiceProvider;

class CryptoApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /* Css files */
        $this->publishes([
            __DIR__ . "/publishes/coinApi.php" => config_path("coinApi.php"),
        ],"CoinApi-Config");
    }
}
