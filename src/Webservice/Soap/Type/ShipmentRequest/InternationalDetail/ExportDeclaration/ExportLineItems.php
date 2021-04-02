<?php


namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration;


use Debug;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems\ExportLineItem;

class ExportLineItems
{
    /**
     * The list of export items.
     *
     * @var ExportLineItem[]
     */
    public $ExportLineItem;
    
    /**
     * ExportLineItems constructor.
     *
     * @param ExportLineItem[] $ExportLineItem
     */
    public function __construct(array $ExportLineItem)
    {
        $this->ExportLineItem = $ExportLineItem;
    }
    
    /**
     * @return ExportLineItem[]
     */
    public function getExportLineItem(): array
    {
        return $this->ExportLineItem;
    }
    
    /**
     * @param ExportLineItem[] $ExportLineItem
     *
     * @return ExportLineItems
     */
    public function setExportLineItem(array $ExportLineItem): ExportLineItems
    {
        $this->ExportLineItem = $ExportLineItem;
        
        return $this;
    }
    
    
}