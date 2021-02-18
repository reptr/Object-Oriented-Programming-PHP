<?php

namespace Interface\Inter\Customer;

use Interface\Inter\Customer;
use Interface\Inter\Person;

class Basic extends Person implements Customer
{
    public function getMonthlyFee()
    {
        return 5.0;
    }

    public function getAmountToBorrow()
    {
        return 3;
    }

    public function getType()
    {
        return 'Basic';
    }

    public function pay(float $amount)
    {
        return "Paying $amount";
    }

    public function isExtentOfTaxes()
    {
        return 'You must pay TAX!';
    }
}
