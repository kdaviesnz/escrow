<?php
declare(strict_types=1); // must be first line

namespace kdaviesnz\escrow;

/**
 * Class Item
 * @package kdaviesnz\escrow
 */
class Item implements IItem
{
    /**
     * @var string
     */
    private $description;
    /**
     * @var float
     */
    private $amount;
    /**
     * @var int
     */
    private $inspection_period;

    /**
     * @var string
     */
    private $type;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var string
     */
    private $title;

    /**
     * Item constructor.
     * @param string $description
     * @param float $amount
     * @param int $inspection_period
     * @param string $type
     * @param int $quantity
     * @param string $title
     */
    public function __construct(
        string $description,
        float $amount,
        int $inspection_period,
        string $type,
        int $quantity,
        string $title
    ) {
        $this->description = $description;
        $this->amount = $amount;
        $this->inspection_period = $inspection_period;
        $this->type = $type;
        $this->quantity = $quantity;
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getInspectionPeriod(): int
    {
        return $this->inspection_period;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }
}
