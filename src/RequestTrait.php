<?php
/**
 * Project utils-exchange-rates.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 2018-12-23
 * Time: 02:55
 */

namespace nguyenanhung\Utils\ExchangeRates;

/**
 * Trait RequestTrait
 *
 * @package   nguyenanhung\Utils\ExchangeRates
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
trait RequestTrait
{
    /**
     * Function sendRequest
     *
     * @param string $url
     * @param array $data
     *
     * @return bool|string
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-23 03:01
     *
     */
    public function sendRequest($url = '', $data = [])
    {
        $endpoint = is_array($data) && count($data) > 0 ? $url . '?' . http_build_query($data) : $url;

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 15,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => array(),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
}
