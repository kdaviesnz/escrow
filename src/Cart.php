<?php
declare(strict_types=1);

namespace kdaviesnz\escrow;

/**
 * Class Cart
 * @package kdaviesnz\escrow
 */
class Cart implements ICart
{
    /**
     * @var string
     */
    private $currency;
    /**
     * @var array
     */
    private $parties;
    /**
     * @var string
     */
    private $description;
    /**
     * @var
     */
    private $items;
    /**
     * @var string
     */
    private $buyerEmail;
    /**
     * @var string
     */
    private $sellerEmail;


    /**
     * Cart constructor.
     * @param string $currency
     * @param string $buyerEmail
     * @param string $sellerEmail
     * @param string $description
     */
    public function __construct(string $currency, string $buyerEmail, string $sellerEmail, string $description)
    {
        $this->currency = $currency;
        $this->description = $description;
        $this->buyerEmail = $buyerEmail;
        $this->sellerEmail = $sellerEmail;
        $this->parties = array(
            array(
                'customer' => $buyerEmail,
                'role' => 'buyer',
            ),
            array(
                'customer' => $sellerEmail,
                'role' => 'seller',
            ),
        );
    }

    /**
     * @param IItem $item
     */
    public function addItem(IItem $item)
    {
        $this->items[] = array(
            'description' => $item->getDescription(),
            'schedule' => array(
                array(
                    'payer_customer' => $this->buyerEmail,
                    'amount' => $item->getAmount(),
                    'beneficiary_customer' => $this->sellerEmail
                )
            ),
            'title' => $item->getTitle(),
            'inspection_period' => $item->getInspectionPeriod(),
            'type' => $item->getType(),
            'quantity' => $item->getQuantity()
        );
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getItems():array
    {
        return $this->items;
    }

    /**
     * @return array
     */
    public function getParties(): array
    {
        return $this->parties;
    }
}
