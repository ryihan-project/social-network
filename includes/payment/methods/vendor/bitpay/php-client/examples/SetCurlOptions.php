<?php
/**
 * Copyright (c) 2014-2015 BitPay
 */

require __DIR__ . '/../vendor/autoload.php';

// When running bitpay on your local server
$network = new Bitpay\Network\Customnet("127.0.0.1", 8088, true);

// Customize the curl options
