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
     * @var string
     */
    protected $orderId;

    /**
     * @var ItemInterface
     */
    protected $item;

    /**
     * @var string
     */
    /**
     * @var boolean
     */
    protected $fullNotifications = true;
    /**
     * @inheritdoc
     */
    public function getItem()
    {
        // If there is not an item already set, we need to use a default item
        // so that some methods do not throw errors about methods and
        // non-objects.
        if (null == $this->item) {
            $this->item = new Item();
        }

        return $this->item;
    }

    public function setNotificationUrl($notificationUrl)
    {
        if (!empty($notificationUrl) && ctype_print($notificationUrl)) {
            $this->notificationUrl = trim($notificationUrl);
        }

        return $this;
    }
    /**
     * @param string $url
     *
     * @return InvoiceInterface
     */
    public function setUrl($url)
    {
        if (!empty($url) && ctype_print($url)) {
            $this->url = trim($url);
        }

        return $this;
    }
    public function setPaymentTotals($paymentTotals)
    {
        if (!empty($paymentTotals)) {
            $this->paymentTotals = $paymentTotals;
        }

        return $this;
    }
}
