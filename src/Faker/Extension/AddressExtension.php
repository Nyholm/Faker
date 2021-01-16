<?php

namespace Faker\Extension;

/**
 * @experimental This interface is experimental and does not fall under our BC promise
 */
interface AddressExtension extends Extension
{
    /**
     * Randomly return a real city name.
     */
    public function cityName(): string;

    public function streetSuffixWord(): string;

    public function streetPrefix(): string;

    /**
     * Randomly return a building number.
     */
    public function buildingNumber(): string;
}
