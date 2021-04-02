<?php


namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail;



use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems;

class ExportDeclaration
{
    /**
     * @var ExportLineItems
     */
    private $ExportLineItems;
    
    /**
     * ExportDeclaration constructor.
     *
     * @param ExportLineItems $exportLineItems
     */
    public function __construct(ExportLineItems $exportLineItems)
    {
        $this->ExportLineItems = $exportLineItems;
    }
    
    /**
     * Returns the export items
     *
     * @return ExportLineItems
     */
    public function getExportLineItems(): ExportLineItems
    {
        return $this->ExportLineItems;
    }
    
    /**
     * Sets export items
     *
     * @param ExportLineItems $exportLineItems
     *
     * @return ExportDeclaration
     */
    public function setExportLineItems(ExportLineItems $exportLineItems): ExportDeclaration
    {
        $this->ExportLineItems = $exportLineItems;
        
        return $this;
    }
}