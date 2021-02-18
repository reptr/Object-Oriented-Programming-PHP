<?php

namespace Interface\Inter;

// namespace Jobstore\Domain as Myjob;

// btw, interface bisa extends interface class
interface Customer extends Payer
{
    //interface hanya care thdp public method
    // Method
    public function getMonthlyFee();

    public function getAmountToBorrow();

    public function getType();
}
