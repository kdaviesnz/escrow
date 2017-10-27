<?php
/**
 * Created by PhpStorm.
 * User: kevindavies
 * Date: 28/10/17
 * Time: 10:58 AM
 */

namespace kdaviesnz\escrow;


interface ICustomer
{
    public function getPhoneNumber():string;
    public function getFirstName():string;
    public function getLastName():string;
    public function getMiddleName():string;
    public function getAddress():IAddress;
    public function getEmail():string;
}