<?php


namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItems\ExportLineItem;


use Dhl\Express\Webservice\Soap\Type\Common\AlphaNumeric;

/**
 * ECCN (Export Control Classification Number) info
 * This is required for EEI filing US country usage.
 *
 * @api
 * @author    Lubos Odraska <odraska@slonline.sk>
 * @copyright Copyright (c) 2021, SLONline, s.r.o.
 * @package   Dhl\Express\Webservice\Soap\Type\ShipmentRequest\InternationalDetail\ExportDeclaration\ExportLineItem
 */
class ECCN extends AlphaNumeric
{
    const MIN_LENGTH = 0;
    const MAX_LENGTH = 30;
}