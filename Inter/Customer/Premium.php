<?php

namespace Interface\Inter\Customer;

use Interface\Inter\Customer;
use Interface\Inter\Person;

class Premium extends Person implements Customer
{
    public function getMonthlyFee()
    {
        return 10.0;
    }

    public function getAmountToBorrow()
    {
        return 10;
    }

    public function getType()
    {
        return 'Premium';
    }

    public function pay(float $amount)
    {
        return "Paying $amount";
    }

    public function isExtentOfTaxes()
    {
        return 'Dont worry about TAX!';
    }
}
