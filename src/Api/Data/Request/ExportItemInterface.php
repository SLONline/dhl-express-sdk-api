<?php


namespace Dhl\Express\Api\Data\Request;


interface ExportItemInterface
{
    /**
     * @return int
     */
    public function getItemNumber(): int;
    
    /**
     * @return float
     */
    public function getQuantity(): float;
    
    /**
     * @return string
     */
    public function getQuantityUnitOfMeasurement(): string;
    
    /**
     * @return string
     */
    public function getItemDescription(): string;
    
    /**
     * @return float
     */
    public function getUnitPrice(): float;
    
    /**
     * @return float
     */
    public function getNetWeight(): float;
    
    /**
     * @return string
     */
    public function getNetWeightUOM(): string;
    
    /**
     * @return float
     */
    public function getGrossWeight(): float;
    
    /**
     * @return string
     */
    public function getGrossWeightUOM(): string;
    
    /**
     * @return string
     */
    public function getManufacturingCountryCode(): ?string;
    
    /**
     * @return string
     */
    public function getCommodityCode(): ?string;
    
    /**
     * @return string|null
     */
    public function getECCN(): ?string;
    
    /**
     * @return string
     */
    public function getExportReasonType(): ?string;
    
    /**
     * @return string
     */
    public function getTaxesPaid(): ?string;
    
}