<?php
/**
 * Project utils-exchange-rates.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 2018-12-23
 * Time: 03:06
 */

namespace nguyenanhung\Utils\ExchangeRates;

/**
 * Trait ResponseTrait
 *
 * @package   nguyenanhung\Utils\ExchangeRates
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
trait ResponseTrait
{
    /**
     * Function getResponse
     *
     * @return mixed
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-23 03:07
     *
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Function toJson
     *
     * @return false|string
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-23 03:07
     *
     */
    public function toJson()
    {
        return json_encode($this->response);
    }
}
