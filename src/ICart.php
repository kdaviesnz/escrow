<?php

namespace kdaviesnz\escrow;


interface ICart
{
    public function addItem(IItem $item);
    public function getCurrency(): string;
    public function getDescription(): string;
    public function getItems():array;
    public function getParties(): array;
}