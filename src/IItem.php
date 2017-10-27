<?php

namespace kdaviesnz\escrow;


interface IItem
{
    public function getDescription(): string;
    public function getAmount(): float;
    public function getTitle(): string;
    public function getInspectionPeriod(): int;
    public function getType(): string;
    public function getQuantity(): int;
}