<?php
declare(strict_types=1); // must be first line


namespace kdaviesnz\escrow;

/**
 * Class Customer
 * @package kdaviesnz\escrow
 */
class Customer implements ICustomer
{
    /**
     * @var string
     */
    private $phone_number;
    /**
     * @var string
     */
    private $first_name;
    /**
     * @var string
     */
    private $last_name;
    /**
     * @var string
     */
    private $middle_name;
    /**
     * @var string
     */
    private $email;
    /**
     * @var IAddress
     */
    private $address;


    /**
     * Customer constructor.
     * @param string $phone_number
     * @param string $first_name
     * @param string $last_name
     * @param string $middle_name
     * @param string $email
     * @param IAddress $address
     */
    public function __construct(
        string $phone_number,
        string $first_name,
        string $last_name,
        string $middle_name,
        string $email,
        IAddress $address
    ) {
        $this->phone_number = $phone_number;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->middle_name = $middle_name;
        $this->email = $email;
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * @return string
     */
    public function getMiddleName(): string
    {
        return $this->middle_name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return IAddress
     */
    public function getAddress(): IAddress
    {
        return $this->address;
    }
}

