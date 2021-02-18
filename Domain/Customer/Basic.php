<?php

namespace Jobstore\Domain\Customer;

use Jobstore\Domain\Customer;

class Basic extends Customer
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
}
