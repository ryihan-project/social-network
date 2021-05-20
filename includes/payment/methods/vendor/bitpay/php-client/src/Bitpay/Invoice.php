<?php
/**
 * @license Copyright 2011-2014 BitPay Inc., MIT License
 * see https://github.com/bitpay/php-bitpay-client/blob/master/LICENSE
 */

namespace Bitpay;

/**
 *
 * @package Bitpay
 */
class Invoice implements InvoiceInterface
{
    /**
     * @var CurrencyInterface
     */
    protected $currency;

    /**
    public function setPaymentTotals($paymentTotals)
    {
        if (!empty($paymentTotals)) {
            $this->paymentTotals = $paymentTotals;
        }

        return $this;
    }
}
