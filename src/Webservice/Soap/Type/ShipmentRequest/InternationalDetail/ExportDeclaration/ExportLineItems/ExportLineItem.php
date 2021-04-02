<?php


namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems;


use Dhl\Express\Webservice\Soap\Type\Common\Numeric;
use Dhl\Express\Webservice\Soap\Type\Common\Ship\Address\CountryCode;
use Dhl\Express\Webservice\Soap\Type\Common\YesNo;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems\ExportLineItem\CommodityCode;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems\ExportLineItem\ECCN;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems\ExportLineItem\ExportReasonType;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems\ExportLineItem\ItemDescription;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems\ExportLineItem\Quantity;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems\ExportLineItem\QuantityUnitOfMeasurement;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems\ExportLineItem\UnitPrice;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\Packages\RequestedPackages\Weight;

/**
 * ExportLineItem
 *
 * @api
 * @author    Lubos Odraska <odraska@slonline.sk>
 * @copyright Copyright (c) 2021, SLONline, s.r.o.
 * @package   Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration
 */
class ExportLineItem
{
    /**
     * Commodity code for the shipment at item line level
     *
     * @var CommodityCode|null
     */
    private $CommodityCode;
    /**
     * ECCN (Export Control Classification Number) info
     *
     * @var ECCN|null
     */
    private $ECCN;
    /**
     * @var ExportReasonType|null
     */
    private $ExportReasonType;
    /**
     * Serial number for the items
     * @var Numeric
     */
    public $ItemNumber;
    /**
     * Number of pieces of a particular line item
     *
     * @var Quantity
     */
    private $Quantity;
    /**
     * The quantity unit of measurement
     *
     * @var QuantityUnitOfMeasurement
     */
    private $QuantityUnitOfMeasurement;
    /**
     * Export line item description
     *
     * @var ItemDescription
     */
    private $ItemDescription;
    /**
     * Monetary value of each line item
     *
     * @var UnitPrice
     */
    private $UnitPrice;
    /**
     * Net weight of the line item
     *
     * @var Weight
     */
    private $NetWeight;
    /**
     * Gross weight of the line item
     *
     * @var Weight
     */
    private $GrossWeight;
    /**
     * Manufacturing ISO country code
     *
     * @var CountryCode
     */
    private $ManufacturingCountryCode;
    /**
     * TaxesPaid if set to N. The default is N
     *
     * @var YesNo
     */
    private $TaxesPaid;
    
    /**
     * @return CommodityCode|null
     */
    public function getCommodityCode(): ?CommodityCode
    {
        return $this->CommodityCode;
    }
    
    /**
     * @param string|null $CommodityCode
     *
     * @return ExportLineItem
     */
    public function setCommodityCode(?string $CommodityCode): ExportLineItem
    {
        $this->CommodityCode = new CommodityCode($CommodityCode);
        
        return $this;
    }
    
    /**
     * @return ECCN|null
     */
    public function getECCN(): ?ECCN
    {
        return $this->ECCN;
    }
    
    /**
     * @param string|null $ECCN
     *
     * @return ExportLineItem
     */
    public function setECCN(?string $ECCN): ExportLineItem
    {
        $this->ECCN = new ECCN($ECCN);
        
        return $this;
    }
    
    /**
     * @return ExportReasonType|null
     */
    public function getExportReasonType(): ?ExportReasonType
    {
        return $this->ExportReasonType;
    }
    
    /**
     * @param string|null $ExportReasonType
     *
     * @return ExportLineItem
     */
    public function setExportReasonType(?string $ExportReasonType): ExportLineItem
    {
        $this->ExportReasonType = new ExportReasonType($ExportReasonType);
        
        return $this;
    }
    
    /**
     * @return int
     */
    public function getItemNumber()
    {
        return (int)$this->ItemNumber;
    }
    
    /**
     * @param int $ItemNumber
     *
     * @return ExportLineItem
     */
    public function setItemNumber($ItemNumber)
    {
        $this->ItemNumber = new Numeric($ItemNumber);
        
        return $this;
    }
    
    /**
     * @return Quantity
     */
    public function getQuantity(): Quantity
    {
        return $this->Quantity;
    }
    
    /**
     * @param Quantity $Quantity
     *
     * @return int
     */
    public function setQuantity(int $Quantity): ExportLineItem
    {
        $this->Quantity = new Quantity($Quantity);
        
        return $this;
    }
    
    /**
     * @return QuantityUnitOfMeasurement
     */
    public function getQuantityUnitOfMeasurement(): QuantityUnitOfMeasurement
    {
        return $this->QuantityUnitOfMeasurement;
    }
    
    /**
     * @param string $QuantityUnitOfMeasurement
     *
     * @return ExportLineItem
     */
    public function setQuantityUnitOfMeasurement(string $QuantityUnitOfMeasurement): ExportLineItem
    {
        $this->QuantityUnitOfMeasurement = new QuantityUnitOfMeasurement($QuantityUnitOfMeasurement);
        
        return $this;
    }
    
    /**
     * @return ItemDescription
     */
    public function getItemDescription(): ItemDescription
    {
        return $this->ItemDescription;
    }
    
    /**
     * @param string $ItemDescription
     *
     * @return ExportLineItem
     */
    public function setItemDescription(string $ItemDescription): ExportLineItem
    {
        $this->ItemDescription = new ItemDescription($ItemDescription);
        
        return $this;
    }
    
    /**
     * @return UnitPrice
     */
    public function getUnitPrice(): UnitPrice
    {
        return $this->UnitPrice;
    }
    
    /**
     * @param float $UnitPrice
     *
     * @return ExportLineItem
     */
    public function setUnitPrice(float $UnitPrice): ExportLineItem
    {
        $this->UnitPrice = new UnitPrice($UnitPrice);
        
        return $this;
    }
    
    /**
     * @return Weight
     */
    public function getNetWeight(): Weight
    {
        return $this->NetWeight;
    }
    
    /**
     * @param float $NetWeight
     *
     * @return ExportLineItem
     */
    public function setNetWeight(float $NetWeight): ExportLineItem
    {
        $this->NetWeight = new Weight($NetWeight);
        
        return $this;
    }
    
    /**
     * @return Weight
     */
    public function getGrossWeight(): Weight
    {
        return $this->GrossWeight;
    }
    
    /**
     * @param float $GrossWeight
     *
     * @return ExportLineItem
     */
    public function setGrossWeight(float $GrossWeight): ExportLineItem
    {
        $this->GrossWeight = new Weight($GrossWeight);
        
        return $this;
    }
    
    /**
     * @return CountryCode
     */
    public function getManufacturingCountryCode(): CountryCode
    {
        return $this->ManufacturingCountryCode;
    }
    
    /**
     * @param string $ManufacturingCountryCode
     *
     * @return ExportLineItem
     */
    public function setManufacturingCountryCode(string $ManufacturingCountryCode): ExportLineItem
    {
        $this->ManufacturingCountryCode = new CountryCode($ManufacturingCountryCode);
        
        return $this;
    }
    
    /**
     * @return YesNo
     */
    public function getTaxesPaid(): YesNo
    {
        return $this->TaxesPaid;
    }
    
    /**
     * @param string $TaxesPaid
     *
     * @return ExportLineItem
     */
    public function setTaxesPaid(string $TaxesPaid): ExportLineItem
    {
        $this->TaxesPaid = new YesNo($TaxesPaid);
        
        return $this;
    }
}