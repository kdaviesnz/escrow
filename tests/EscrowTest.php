<?php

require_once ("vendor/autoload.php");
require_once("src/IItem.php");
require_once("src/Item.php");
require_once("src/ICart.php");
require_once("src/Cart.php");
require_once("src/IEscrow.php");
require_once("src/Escrow.php");


class EscrowTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {

    }

    public function tearDown()
    {

    }

    public function testEscrow()
    {
        $customerEmail = uniqid() . "@example.com";

        $address = new \kdaviesnz\escrow\Address(
            'San Francisco',
            '10203',
            'US',
            'Apartment 301020',
            '1829 West Lane',
            'CA'
        );

        $customer = new \kdaviesnz\escrow\Customer(
            '8885118600',
            'John',
            'Smith',
            'Kane',
            $customerEmail,
            $address
        );


        $item = new \kdaviesnz\escrow\Item(
            'johnwick.com',
            1000.0,
            259200,
            "domain_name",
            1,
            'johnwick.com'
        );

        $cart = new \kdaviesnz\escrow\Cart(
            'usd',
            'me',
            'keanu.reaves@escrow.com',
            'The sale of johnwick.com'
        );

        $cart->addItem($item);

        $escrow = new \kdaviesnz\escrow\Escrow("lkdfklakljsdfs", "lkjsdflkasdf@example.com");
        $responseCode = $escrow->createTransaction($cart);
        $this->assertTrue('201' != $responseCode, "Create transaction failed");

        $escrow = new \kdaviesnz\escrow\Escrow("7Hpd9ub5", "kdavies@gmail.com");

        // Create new customer
       // $responseCode = $escrow->createNewCustomer($customer);
       // $this->assertTrue('201' == $responseCode, "Create customer failed");

        // Get customer
        $result = $escrow->getCustomer("me");

        $responseCode = $escrow->createTransaction($cart);
        $this->assertTrue('201' == $responseCode, "Create transaction failed");
    }
}

