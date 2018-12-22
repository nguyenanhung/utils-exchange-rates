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

// Parse dữ liệu từ API ngân hàng
$parse = $vcb->parseDataExchangeRates();
// Hiển thị dữ liệu dạng JSON
echo $parse->toJson();

// Hiển thị dữ liệu thô

echo "<pre>";
print_r($parse->getResponse());
echo "</pre>";

