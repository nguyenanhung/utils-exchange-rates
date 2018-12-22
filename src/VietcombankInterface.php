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
     * Function parseDataExchangeRates
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-23 03:06
     *
     * @return $this
     */
    public function parseDataExchangeRates();
}
