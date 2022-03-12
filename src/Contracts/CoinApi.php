<?php


namespace BlackPanda\CryptoApi\Contracts;


abstract class CoinApi
{
    protected $api_key = null;
    protected $api_sec = null;
    protected $api_config = null;
    protected $api = null;

    public function __construct($api_key , $api_sec , $api_config = null)
    {
        $this->api_key = $api_key;
        $this->api_sec = $api_sec;
        $this->api_config = $api_config;
    }
}
