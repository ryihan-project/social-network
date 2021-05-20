    public function setPaymentTotals($paymentTotals)
    {
        if (!empty($paymentTotals)) {
            $this->paymentTotals = $paymentTotals;
        }

        return $this;
    }
}
