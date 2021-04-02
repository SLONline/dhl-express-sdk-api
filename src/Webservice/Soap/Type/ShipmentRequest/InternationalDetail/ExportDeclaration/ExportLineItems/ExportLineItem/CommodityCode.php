<?php


namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems\ExportLineItem;


use Dhl\Express\Webservice\Soap\Type\Common\AlphaNumeric;

/**
 * Commodity code for the shipment at item line level
 *
 * @api
 * @author    Lubos Odraska <odraska@slonline.sk>
 * @copyright Copyright (c) 2021, SLONline, s.r.o.
 */
class CommodityCode extends AlphaNumeric
{
    const MIN_LENGTH = 0;
    const MAX_LENGTH = 20;
}