<?php
declare(strict_types=1);

namespace kdaviesnz\escrow;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

/**
 * Class Escrow
 * @package kdaviesnz\escrow
 */
class Escrow implements IEscrow
{
    /**
     * @var string
     */
    private $password;
    /**
     * @var string
     */
    private $email;

    /**
     * Escrow constructor.
     * @param $password
     * @param $email
     */
    public function __construct(string $password, string $email)
    {
        $this->password = $password;
        $this->email = $email;
    }

    /**
     * @param ICart $cart
     * @return int
     */
    public function createTransaction(ICart $cart): int
    {
        $client = new Client();
        try {
            $response = $client->request(
                'POST',
                'https://api.escrow-sandbox.com/2017-09-01/transaction',
                [
                    'auth' => [$this->email, $this->password],
                    'form_params' => [],
                    'json' => [
                        'currency' => $cart->getCurrency(),
                        'description' => $cart->getDescription(),
                        'items' => $cart->getItems(),
                        'parties' => $cart->getParties()
                    ]
                ]
            );
        } catch (RequestException $e) {
            return $e->getCode();
        }

        return $response->getStatusCode();
    }

    public function createNewCustomer(ICustomer $customer): int
    {
        $client = new Client();
        $address = $customer->getAddress();
        try {
            $response = $client->request(
                'POST',
                'https://api.escrow-sandbox.com/2017-09-01/customer',
                [
                    'auth' => [$this->email, $this->password],
                    'form_params' => [],
                    'json' => [
                        'phone_number' => $customer->getPhoneNumber(),
                        'first_name' => $customer->getFirstName(),
                        'last_name' => $customer->getLastName(),
                        'middle_name' => $customer->getMiddleName(),
                        'adddress' => array (
                            'city' => $address->getCity(),
                            'post_code' => $address->getPostCode(),
                            'country' => $address->getCountry(),
                            'line2' => $address->getLine2(),
                            'line1' => $address->getLine1(),
                            'state' => $address->getState()
                        ),
                        'email' => $customer->getEmail()
                    ]
                ]
            );
        } catch (RequestException $e) {
            return $e->getCode();
        }

        return $response->getStatusCode();
    }

    public function getCustomer(string $reference)
    {
        $client = new Client();
        var_dump($reference);
        try {
            $response = $client->request(
                'GET',
                'https://api.escrow-sandbox.com/2017-09-01/' . $reference,
                [
                    'auth' => [$this->email, $this->password],
                    'Content-Type' => 'application/json'
                ]
            );
        } catch (RequestException $e) {
            return $e->getCode();
        }

        // @todo return customer object
        // ref https://www.escrow.com/api/docs/create-customer
        return $response->getStatusCode();
    }
}
