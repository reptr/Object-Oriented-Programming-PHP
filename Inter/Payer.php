<?php

namespace Interface\Inter;

interface Payer
{
    public function pay(float $amount);

    public function isExtentOfTaxes();
}
