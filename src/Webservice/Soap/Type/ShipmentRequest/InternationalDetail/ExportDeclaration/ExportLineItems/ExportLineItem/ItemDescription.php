<?php


namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems\ExportLineItem;


use Dhl\Express\Webservice\Soap\Type\Common\AlphaNumeric;

/**
 * The description of the line item
 *
 * @api
 * @author    Lubos Odraska <odraska@slonline.sk>
 * @copyright Copyright (c) 2021, SLONline, s.r.o.
 * @package   Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItem
 */
class ItemDescription extends AlphaNumeric
{
    const MAX_LENGTH = 60;
}