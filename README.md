# Utils: Exchange Rates

Hàm lấy dữ liệu tỷ giá giao dịch từ website 1 số ngân hàng



#### Giá vàng Vietcombank

Hàm bóc tách dữ liệu từ website ngân hàng Vietcombank: http://www.vietcombank.com.vn/ExchangeRates/

```php
<?php
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
```



### Liên hệ

Nếu có bất cứ thông tin nào cần trao đổi và tìm hiểu, vui lòng liên hệ theo thông tin sau

| Name        | Email                | Skype            | Facebook      |
| ----------- | -------------------- | ---------------- | ------------- |
| Hung Nguyen | dev@nguyenanhung.com | nguyenanhung5891 | @nguyenanhung |

From Hanoi with Love <3
