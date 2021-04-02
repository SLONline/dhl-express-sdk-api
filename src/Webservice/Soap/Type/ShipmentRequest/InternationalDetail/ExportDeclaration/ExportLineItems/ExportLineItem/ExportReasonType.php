<?php


namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems\ExportLineItem;


use Dhl\Express\Webservice\Soap\ValueInterface;

/**
 * Export reason
 *
 * @api
 * @author    Lubos Odraska <odraska@slonline.sk>
 * @copyright Copyright (c) 2021, SLONline, s.r.o.
 * @package   Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItem
 */
class ExportReasonType implements ValueInterface
{
    /**
     * @var string
     */
    const PERMANENT = 'PERMANENT';
    /**
     * @var string
     */
    const TEMPORARY = 'TEMPORARY';
    /**
     * @var string
     */
    const RETURN = 'RETURN';
    
    /**
     * The export reason type.
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
    public function __construct($value = self::PERMANENT)
    {
        if (!\in_array($value, [self::PERMANENT, self::TEMPORARY, self::RETURN], true)) {
            throw new \InvalidArgumentException('Argument must be either "PERMANENT", "RETURN", or "TEMPORARY"');
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