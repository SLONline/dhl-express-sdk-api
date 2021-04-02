<?php


namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems\ExportLineItem;


use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * The quantity unit of measurement
 *
 * @api
 * @author    Lubos Odraska <odraska@slonline.sk>
 * @copyright Copyright (c) 2021, SLONline, s.r.o.
 */
class QuantityUnitOfMeasurement implements ValueInterface
{
    /**
     * Boxes
     * @var string
     */
    const BOXES = 'BOX';
    /**
     * Centigram
     * @var string
     */
    const CENTIGRAM = '2GM';
    /**
     * Centimeters
     * @var string
     */
    const CENTIMETERS = '2M';
    /**
     * CubicCentimeters
     * @var string
     */
    const CUBIC_CENTIMETERS = '2M3';
    /**
     * Cubic Feet
     * @var string
     */
    const CUBIC_FEET = '3M3';
    /**
     * Cubic Meters
     * @var string
     */
    const CUBIC_METERS = 'M3';
    /**
     * Dozen Pairs
     * @var string
     */
    const DOZEN_PAIRS = 'DPR';
    /**
     * Dozen
     * @var string
     */
    const DOZEN = 'DOZ';
    /**
     * Each
     * @var string
     */
    const EACH = '2NO';
    /**
     * Pieces
     * @var string
     */
    const PIECES = 'PCS';
    /**
     * Grams
     * @var string
     */
    const GRAMS = 'GM';
    /**
     * Gross
     * @var string
     */
    const GROSS = 'GRS';
    /**
     * Kilograms
     * @var string
     */
    const KILOGRAMS = 'KG';
    /**
     * Liters
     * @var string
     */
    const LITERS = 'L';
    /**
     * Meters
     * @var string
     */
    const METERS = 'M';
    /**
     * Milligrams
     * @var string
     */
    const MILLIGRAMS = '3GM';
    /**
     * Milliliters
     * @var string
     */
    const MILLILITERS = '3L';
    /**
     * No Unit Required
     * @var string
     */
    const NO_UNIT_REQUIRED = 'X';
    /**
     * Number
     * @var string
     */
    const NUMBER = 'NO';
    /**
     * Ounces
     * @var string
     */
    const OUNCES = '2KG';
    /**
     * Pairs
     * @var string
     */
    const PAIRS = 'PRS';
    /**
     * Gallons
     * @var string
     */
    const GALLONS = '2L';
    /**
     * Pounds
     * @var string
     */
    const POUNDS = '3KG';
    /**
     * Square Centimeters
     * @var string
     */
    const SQUARE_CENTIMETERS = 'CM2';
    /**
     * Square Feet
     * @var string
     */
    const SQUARE_FEET = '2M2';
    /**
     * Square Inches
     * @var string
     */
    const SQUARE_INCHES = '3M2';
    /**
     * Square Meters
     * @var string
     */
    const SQUARE_METERS = 'M2';
    /**
     * Square Yards
     * @var string
     */
    const SQUARE_YARDS = '4M2';
    /**
     * Yards
     * @var string
     */
    const YARDS = '3M';
    
    /**
     * The quantity unit
     *
     * @var string
     */
    private $value;
    
    /**
     * Constructor.
     *
     * @param string $value The value
     *
     */
    public function __construct($value = self::PIECES)
    {
        if (!\in_array($value, [
            self::BOXES,
            self::CENTIGRAM,
            self::CENTIMETERS,
            self::CUBIC_CENTIMETERS,
            self::CUBIC_FEET,
            self::CUBIC_METERS,
            self::DOZEN_PAIRS,
            self::DOZEN,
            self::EACH,
            self::PIECES,
            self::GRAMS,
            self::GROSS,
            self::KILOGRAMS,
            self::LITERS,
            self::METERS,
            self::MILLIGRAMS,
            self::MILLILITERS,
            self::NO_UNIT_REQUIRED,
            self::NUMBER,
            self::OUNCES,
            self::PAIRS,
            self::GALLONS,
            self::POUNDS,
            self::SQUARE_CENTIMETERS,
            self::SQUARE_FEET,
            self::SQUARE_INCHES,
            self::SQUARE_METERS,
            self::SQUARE_YARDS,
            self::YARDS,
        ], true)) {
            throw new \InvalidArgumentException('Argument must be either
            BOXES, CENTIGRAM, CENTIMETERS, CUBIC_CENTIMETERS, CUBIC_FEET, CUBIC_METERS,
            DOZEN_PAIRS, DOZEN, EACH, PIECES, GRAMS, GROSS, KILOGRAMS, LITERS, METERS,
            MILLIGRAMS, MILLILITERS, NO_UNIT_REQUIRED, NUMBER, OUNCES, PAIRS, GALLONS, POUNDS,
            SQUARE_CENTIMETERS, SQUARE_FEET, SQUARE_INCHES, SQUARE_METERS, SQUARE_YARDS, YARDS');
        }
        
        $this->value = $value;
    }
    
    /**
     * Returns the value as string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}