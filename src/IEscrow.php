<?php

namespace kdaviesnz\escrow;

interface IEscrow
{
    public function createNewCustomer(ICustomer $customer):int;
    public function getCustomer(string $reference);
    public function createTransaction(ICart $cart):int;
}