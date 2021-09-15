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
 * Class Vietcombank
 *
 * @package   nguyenanhung\Utils\ExchangeRates
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Vietcombank implements VietcombankInterface
{
    use RequestTrait, ResponseTrait;

    /** @var string Endpoint ExchangeRates */
    private $endpoint = 'https://portal.vietcombank.com.vn/Usercontrols/TVPortal.TyGia/pXML.aspx';

    /** @var array|bool Response Data */
    private $response = null;

    /**
     * Function parseDataExchangeRates
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-23 03:06
     *
     * @return $this
     */
    public function parseDataExchangeRates()
    {
        $xmlData = null;
        $p       = xml_parser_create();
        xml_parse_into_struct($p, $this->sendRequest($this->endpoint), $xmlData);
        xml_parser_free($p);
        $data = array();
        if ($xmlData) {
            $data['status'] = 0;
            foreach ($xmlData as $value) {
                if (isset($value['attributes'])) {
                    $data[] = $value['attributes'];
                }
            }
            $this->response = $data;
        }
        $this->response = $data;

        return $this;
    }
}
