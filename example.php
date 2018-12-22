<?php
/**
 * Project utils-exchange-rates.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 2018-12-23
 * Time: 03:03
 */
require_once __DIR__ . '/vendor/autoload.php';

$vcb = new \nguyenanhung\Utils\ExchangeRates\Vietcombank();

$parse = $vcb->parseDataExchangeRates();

echo $parse->toJson();