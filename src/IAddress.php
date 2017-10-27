<?php
/**
 * Created by PhpStorm.
 * User: kevindavies
 * Date: 28/10/17
 * Time: 11:00 AM
 */

namespace kdaviesnz\escrow;


interface IAddress
{
    public function getCity():string;
    public function getPostCode():string;
    public function getCountry():string;
    public function getLine2():string;
    public function getLine1():string;
    public function getState():string;
}