<?php


namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest;

/**
 * Shipment Notifications
 *
 * @author Lubos Odraska <odraska@slonline.sk>
 * @link   https://www.slonline.sk/
 */
class ShipmentNotifications
{
    private $ShipmentNotification;
    
    /**
     * Constructor.
     *
     * @param RequestedPackages[] $ShipmentNotifications notifications
     */
    public function __construct(array $ShipmentNotifications)
    {
        $this->ShipmentNotification = $ShipmentNotifications;
    }
    
    public function getShipmentNotification()
    {
        return $this->ShipmentNotification;
    }
}