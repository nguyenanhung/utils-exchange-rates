<?php
/**
 * Project utils-exchange-rates.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 2018-12-23
 * Time: 03:11
 */

namespace nguyenanhung\Utils\ExchangeRates;

/**
 * Interface VietcombankInterface
 *
 * @package   nguyenanhung\Utils\ExchangeRates
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
interface VietcombankInterface
{
    /**
     * Function overrideEndpoint
     *
     * @param $endpoint
     * User: 713uk13m <dev@nguyenanhung.com>
     * Copyright: 713uk13m <dev@nguyenanhung.com>
     * @return $this
     */
    public function overrideEndpoint($endpoint = "");

    /**
     * Function parseDataExchangeRates
     *
     * @return $this
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-23 03:06
     *
     */
    public function parseDataExchangeRates();
}
