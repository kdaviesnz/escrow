# escrow

## Install

Via Composer

``` bash
$ composer require kdaviesnz/escrow
```

## Usage

``` php
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

        $escrow = new \kdaviesnz\escrow\Escrow("YOUR ESCROW.COM PASSWORD", "YOUR ESCROW.COM EMAIL");

        // Create new customer
        $responseCode = $escrow->createNewCustomer($customer);

        // Get customer
        $result = $escrow->getCustomer("me");

        $responseCode = $escrow->createTransaction($cart);


```

## Change log

Please see CHANGELOG.md for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see CONTRIBUTING.md and CODE_OF_CONDUCT.md for details.

## Security

If you discover any security related issues, please email kdaviesnz@gmail.com instead of using the issue tracker.

## Credits

- kdaviesnz@gmail.com

## License

The MIT License (MIT). Please see LICENSE.md for more information.


# escrow
# escrow
