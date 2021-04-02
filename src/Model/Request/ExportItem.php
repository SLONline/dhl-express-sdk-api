<?php


namespace Dhl\Express\Model\Request;


use Dhl\Express\Api\Data\Request\ExportItemInterface;

class ExportItem implements ExportItemInterface
{
    const UOM_WEIGHT_KG = 'KG';
    const UOM_WEIGHT_G = 'G';
    /**
     * Boxes
     * @var string
     */
    const UOM_QUANTITY_BOXES = 'BOX';
    /**
     * Centigram
     * @var string
     */
    const UOM_QUANTITY_CENTIGRAM = '2GM';
    /**
     * Centimeters
     * @var string
     */
    const UOM_QUANTITY_CENTIMETERS = '2M';
    /**
     * CubicCentimeters
     * @var string
     */
    const UOM_QUANTITY_CUBIC_CENTIMETERS = '2M3';
    /**
     * Cubic Feet
     * @var string
     */
    const UOM_QUANTITY_CUBIC_FEET = '3M3';
    /**
     * Cubic Meters
     * @var string
     */
    const UOM_QUANTITY_CUBIC_METERS = 'M3';
    /**
     * Dozen Pairs
     * @var string
     */
    const UOM_QUANTITY_DOZEN_PAIRS = 'DPR';
    /**
     * Dozen
     * @var string
     */
    const UOM_QUANTITY_DOZEN = 'DOZ';
    /**
     * Each
     * @var string
     */
    const UOM_QUANTITY_EACH = '2NO';
    /**
     * Pieces
     * @var string
     */
    const UOM_QUANTITY_PIECES = 'PCS';
    /**
     * Grams
     * @var string
     */
    const UOM_QUANTITY_GRAMS = 'GM';
    /**
     * Gross
     * @var string
     */
    const UOM_QUANTITY_GROSS = 'GRS';
    /**
     * Kilograms
     * @var string
     */
    const UOM_QUANTITY_KILOGRAMS = 'KG';
    /**
     * Liters
     * @var string
     */
    const UOM_QUANTITY_LITERS = 'L';
    /**
     * Meters
     * @var string
     */
    const UOM_QUANTITY_METERS = 'M';
    /**
     * Milligrams
     * @var string
     */
    const UOM_QUANTITY_MILLIGRAMS = '3GM';
    /**
     * Milliliters
     * @var string
     */
    const UOM_QUANTITY_MILLILITERS = '3L';
    /**
     * No Unit Required
     * @var string
     */
    const UOM_QUANTITY_NO_UNIT_REQUIRED = 'X';
    /**
     * Number
     * @var string
     */
    const UOM_QUANTITY_NUMBER = 'NO';
    /**
     * Ounces
     * @var string
     */
    const UOM_QUANTITY_OUNCES = '2KG';
    /**
     * Pairs
     * @var string
     */
    const UOM_QUANTITY_PAIRS = 'PRS';
    /**
     * Gallons
     * @var string
     */
    const UOM_QUANTITY_GALLONS = '2L';
    /**
     * Pounds
     * @var string
     */
    const UOM_QUANTITY_POUNDS = '3KG';
    /**
     * Square Centimeters
     * @var string
     */
    const UOM_QUANTITY_SQUARE_CENTIMETERS = 'CM2';
    /**
     * Square Feet
     * @var string
     */
    const UOM_QUANTITY_SQUARE_FEET = '2M2';
    /**
     * Square Inches
     * @var string
     */
    const UOM_QUANTITY_SQUARE_INCHES = '3M2';
    /**
     * Square Meters
     * @var string
     */
    const UOM_QUANTITY_SQUARE_METERS = 'M2';
    /**
     * Square Yards
     * @var string
     */
    const UOM_QUANTITY_SQUARE_YARDS = '4M2';
    /**
     * Yards
     * @var string
     */
    const UOM_QUANTITY_YARDS = '3M';
    /**
     * @var int
     */
    private $itemNumber;
    /**
     * Number of pieces of a particular line item
     * @var float
     */
    private $quantity;
    /**
     * The quantity unit of measurement
     * @var string
     */
    private $quantityUnitOfMeasurement;
    /**
     * The description of the line item
     * @var string
     */
    private $itemDescription;
    /**
     * Monetary value of each line item
     * @var float
     */
    private $unitPrice;
    /**
     * Net weight of the line item
     * @var float
     */
    private $netWeight;
    /**
     * Net weight unit of the line item
     * @var string
     */
    private $netWeightUOM;
    /**
     * Gross weight of the line item
     * @var float
     */
    private $grossWeight;
    /**
     * Gross weight unit of the line item
     * @var string
     */
    private $grossWeightUOM;
    /**
     * Manufacturing ISO country code
     * @var string
     */
    private $manufacturingCountryCode;
    /**
     * Commodity code for the shipment at item line level
     * @var string
     */
    private $commodityCode;
    /**
     * ECCN (Export Control Classification Number) info
     * This is required for EEI filing US country usage.
     * @var string|null
     */
    private $ECCN;
    /**
     * @var string
     */
    private $exportReasonType;
    /**
     * TaxesPaid if set to N. The default is N
     * @var string
     */
    private $taxesPaid;
    
    /**
     * ExportItem constructor.
     *
     * @param int         $itemNumber
     * @param float       $quantity
     * @param string      $quantityUnitOfMeasurement
     * @param string      $itemDescription
     * @param float       $unitPrice
     * @param float       $netWeight
     * @param string      $netWeightUOM
     * @param float       $grossWeight
     * @param string      $grossWeightUOM
     * @param string|null $manufacturingCountryCode
     * @param string|null $commodityCode HS Code
     * @param string|null $ECCN          (Export Control Classification Number) info
     * @param string|null $exportReasonType
     * @param string|null $taxesPaid
     */
    public function __construct(
        int $itemNumber,
        float $quantity,
        string $quantityUnitOfMeasurement,
        string $itemDescription,
        float $unitPrice,
        float $netWeight,
        string $netWeightUOM,
        float $grossWeight,
        string $grossWeightUOM,
        string $manufacturingCountryCode = null,
        string $commodityCode = null,
        string $ECCN = null,
        string $exportReasonType = null,
        string $taxesPaid = null
    ) {
        $quantityUOMs = [
            self::UOM_QUANTITY_BOXES,
            self::UOM_QUANTITY_CENTIGRAM,
            self::UOM_QUANTITY_CENTIMETERS,
            self::UOM_QUANTITY_CUBIC_CENTIMETERS,
            self::UOM_QUANTITY_CUBIC_FEET,
            self::UOM_QUANTITY_CUBIC_METERS,
            self::UOM_QUANTITY_DOZEN_PAIRS,
            self::UOM_QUANTITY_DOZEN,
            self::UOM_QUANTITY_EACH,
            self::UOM_QUANTITY_PIECES,
            self::UOM_QUANTITY_GRAMS,
            self::UOM_QUANTITY_GROSS,
            self::UOM_QUANTITY_KILOGRAMS,
            self::UOM_QUANTITY_LITERS,
            self::UOM_QUANTITY_METERS,
            self::UOM_QUANTITY_MILLIGRAMS,
            self::UOM_QUANTITY_MILLILITERS,
            self::UOM_QUANTITY_NO_UNIT_REQUIRED,
            self::UOM_QUANTITY_NUMBER,
            self::UOM_QUANTITY_OUNCES,
            self::UOM_QUANTITY_PAIRS,
            self::UOM_QUANTITY_GALLONS,
            self::UOM_QUANTITY_POUNDS,
            self::UOM_QUANTITY_SQUARE_CENTIMETERS,
            self::UOM_QUANTITY_SQUARE_FEET,
            self::UOM_QUANTITY_SQUARE_INCHES,
            self::UOM_QUANTITY_SQUARE_METERS,
            self::UOM_QUANTITY_SQUARE_YARDS,
            self::UOM_QUANTITY_YARDS,
        ];
        if (!\in_array($quantityUnitOfMeasurement, $quantityUOMs, true)) {
            throw new \InvalidArgumentException('The quantity UOM must be one of ' . implode(', ', $quantityUOMs));
        }
        
        $weightUOMs = [
            self::UOM_WEIGHT_KG,
            self::UOM_WEIGHT_G,
        ];
        if (!\in_array($netWeightUOM, $weightUOMs, true)) {
            throw new \InvalidArgumentException('The net weight UOM must be one of ' . implode(', ', $weightUOMs));
        }
        
        if (!\in_array($grossWeightUOM, $weightUOMs, true)) {
            throw new \InvalidArgumentException('The gross weight UOM must be one of ' . implode(', ', $weightUOMs));
        }
        
        $this->itemNumber                = $itemNumber;
        $this->quantity                  = $quantity;
        $this->quantityUnitOfMeasurement = $quantityUnitOfMeasurement;
        $this->itemDescription           = $itemDescription;
        $this->unitPrice                 = $unitPrice;
        $this->netWeight                 = $netWeight;
        $this->netWeightUOM              = $netWeightUOM;
        $this->grossWeight               = $grossWeight;
        $this->grossWeightUOM            = $grossWeightUOM;
        $this->manufacturingCountryCode  = $manufacturingCountryCode;
        $this->commodityCode             = $commodityCode;
        $this->ECCN                      = $ECCN;
        $this->exportReasonType          = $exportReasonType;
        $this->taxesPaid                 = $taxesPaid;
    }
    
    /**
     * @return string
     */
    public function getQuantityUnitOfMeasurement(): string
    {
        return $this->quantityUnitOfMeasurement;
    }
    
    /**
     * @param string $quantityUnitOfMeasurement
     *
     * @return ExportItem
     */
    public function setQuantityUnitOfMeasurement(string $quantityUnitOfMeasurement): ExportItem
    {
        $this->quantityUnitOfMeasurement = $quantityUnitOfMeasurement;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getItemDescription(): string
    {
        return $this->itemDescription;
    }
    
    /**
     * @param string $itemDescription
     *
     * @return ExportItem
     */
    public function setItemDescription(string $itemDescription): ExportItem
    {
        $this->itemDescription = $itemDescription;
        
        return $this;
    }
    
    /**
     * @return float
     */
    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }
    
    /**
     * @param float $unitPrice
     *
     * @return ExportItem
     */
    public function setUnitPrice(float $unitPrice): ExportItem
    {
        $this->unitPrice = $unitPrice;
        
        return $this;
    }
    
    /**
     * @return float
     */
    public function getNetWeight(): float
    {
        return $this->netWeight;
    }
    
    /**
     * @param float $netWeight
     *
     * @return ExportItem
     */
    public function setNetWeight(float $netWeight): ExportItem
    {
        $this->netWeight = $netWeight;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getNetWeightUOM(): string
    {
        return $this->netWeightUOM;
    }
    
    /**
     * @param string $netWeightUOM
     *
     * @return ExportItem
     */
    public function setNetWeightUOM(string $netWeightUOM): ExportItem
    {
        $this->netWeightUOM = $netWeightUOM;
        
        return $this;
    }
    
    /**
     * @return float
     */
    public function getGrossWeight(): float
    {
        return $this->grossWeight;
    }
    
    /**
     * @param float $grossWeight
     *
     * @return ExportItem
     */
    public function setGrossWeight(float $grossWeight): ExportItem
    {
        $this->grossWeight = $grossWeight;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getGrossWeightUOM(): string
    {
        return $this->grossWeightUOM;
    }
    
    /**
     * @param string $grossWeightUOM
     *
     * @return ExportItem
     */
    public function setGrossWeightUOM(string $grossWeightUOM): ExportItem
    {
        $this->grossWeightUOM = $grossWeightUOM;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getManufacturingCountryCode(): ?string
    {
        return $this->manufacturingCountryCode;
    }
    
    /**
     * @param string $manufacturingCountryCode
     *
     * @return ExportItem
     */
    public function setManufacturingCountryCode(?string $manufacturingCountryCode): ExportItem
    {
        $this->manufacturingCountryCode = $manufacturingCountryCode;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getCommodityCode(): ?string
    {
        return $this->commodityCode;
    }
    
    /**
     * @param string $commodityCode
     *
     * @return ExportItem
     */
    public function setCommodityCode(?string $commodityCode): ExportItem
    {
        $this->commodityCode = $commodityCode;
        
        return $this;
    }
    
    /**
     * @return string|null
     */
    public function getECCN(): ?string
    {
        return $this->ECCN;
    }
    
    /**
     * @param string|null $ECCN
     *
     * @return ExportItem
     */
    public function setECCN(?string $ECCN): ExportItem
    {
        $this->ECCN = $ECCN;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getExportReasonType(): ?string
    {
        return $this->exportReasonType;
    }
    
    /**
     * @param string $exportReasonType
     *
     * @return ExportItem
     */
    public function setExportReasonType(?string $exportReasonType): ExportItem
    {
        $this->exportReasonType = $exportReasonType;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getTaxesPaid(): ?string
    {
        return $this->taxesPaid;
    }
    
    /**
     * @param string $taxesPaid
     *
     * @return ExportItem
     */
    public function setTaxesPaid(?string $taxesPaid): ExportItem
    {
        $this->taxesPaid = $taxesPaid;
        
        return $this;
    }
    
    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }
    
    /**
     * @param float $quantity
     *
     * @return ExportItem
     */
    public function setQuantity(float $quantity): ExportItem
    {
        $this->quantity = $quantity;
        
        return $this;
    }
    
    /**
     * @return int
     */
    public function getItemNumber(): int
    {
        return $this->itemNumber;
    }
    
    /**
     * @param int $itemNumber
     *
     * @return ExportItem
     */
    public function setItemNumber(int $itemNumber): ExportItem
    {
        $this->itemNumber = $itemNumber;
        
        return $this;
    }
}