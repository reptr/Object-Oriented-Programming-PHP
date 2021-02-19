<?php

namespace Interface\Inter;

// solve jika method sama pada traits -> insteadof atau use

// use trait
use Interface\Utils\Communicator;
// annother trait
use Interface\Utils\Contract;

class Manager
{
    // use Contract;
    // use Communicator;

    //agar solve jika method sama pada traits
    use Contract, Communicator {
        Contract::sign insteadof Communicator;
        Communicator::sign as makeSign;
    }

    public function sign()
    {
        echo 'This is from the class Manager';
    }
}
