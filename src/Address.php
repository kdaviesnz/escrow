<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\escrow;

/**
 * Class Address
 * @package kdaviesnz\escrow
 */
class Address implements IAddress
{
    /**
     * @var string
     */
    private $city;
    /**
     * @var string
     */
    private $post_code;
    /**
     * @var string
     */
    private $country;
    /**
     * @var string
     */
    private $line1;
    /**
     * @var string
     */
    private $line2;
    /**
     * @var string
     */
    private $state;

    /**
     * Address constructor.
     * @param string $city
     * @param string $post_code
     * @param string $country
     * @param string $line1
     * @param string $line2
     * @param string $state
     */
    public function __construct(
        string $city,
        string $post_code,
        string $country,
        string $line1,
        string $line2,
        string $state
    ) {
        $this->city = $city;
        $this->post_code = $post_code;
        $this->country = $country;
        $this->line1 = $line1;
        $this->line2 = $line2;
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getPostCode(): string
    {
        return $this->post_code;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getLine1(): string
    {
        return $this->line1;
    }

    /**
     * @return string
     */
    public function getLine2(): string
    {
        return $this->line2;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
}

