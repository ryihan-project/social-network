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
    protected $transactionSpeed = self::TRANSACTION_SPEED_MEDIUM;

    /**
     * @var string
     */
    protected $notificationEmail;

    /**
     * @var string
     */
    protected $notificationUrl;

    /**
     * @var string
     */
    protected $redirectUrl;

    /**
     * @var string
     */
    protected $posData;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var boolean
     */
    protected $fullNotifications = true;

    /**
     * @var \DateTime
     */
    protected $expirationTime;

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
    /**
     * @param DateTime $expirationTime
     *
     * return InvoiceInterface
     */
    public function setExpirationTime($expirationTime)
    {
        if (is_a($expirationTime, 'DateTime')) {
            $this->expirationTime = $expirationTime;
        } else if (is_numeric($expirationTime)) {
            $expirationDateTime = new \DateTime('', new \DateTimeZone("UTC"));
            $expirationDateTime->setTimestamp($expirationTime);
            $this->expirationTime = $expirationDateTime;
        }
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getBuyerAddress2()
    {
        $address = $this->getBuyer()->getAddress();

        return $address[1];
    }

    /**
     * @deprecated Deprecated with introduction of BCH
     * @param
     * @return Invoice
     */
    public function setBtcPaid($btcPaid)
    {
        if (isset($btcPaid)) {
            $this->btcPaid = $btcPaid;
        }

        return $this;
    }
     /**
     * @param void
     * @return Invoice
     */
    public function getPaymentTotals()
    {
        return $this->paymentTotals;
    }

    /**
     * @param
     * @return
     */
    public function setPaymentTotals($paymentTotals)
    {
        if (!empty($paymentTotals)) {
            $this->paymentTotals = $paymentTotals;
        }

        return $this;
    }
}
