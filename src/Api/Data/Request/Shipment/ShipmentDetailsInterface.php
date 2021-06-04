<?php
/**
 * See LICENSE.md for license details.
 */

namespace Dhl\Express\Api\Data\Request\Shipment;

use Dhl\Express\Webservice\Soap\Type\Common\SpecialServices;
use Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo\DocumentImages;

/**
 * Shipment Details Interface.
 *
 * @api
 * @author   Ronny Gertler <ronny.gertler@netresearch.de>
 * @link     https://www.netresearch.de/
 */
interface ShipmentDetailsInterface
{
    /**
     * Returns the terms of trade.
     *
     * @return string
     */
    public function getTermsOfTrade();

    /**
     * Returns whether this is a scheduled pickup or not.
     *
     * @return bool
     */
    public function isUnscheduledPickup();

    /**
     * Returns TRUE if this is a regular pickup.
     *
     * @return bool
     */
    public function isRegularPickup();

    /**
     * Returns the content type.
     *
     * @return string
     */
    public function getContentType();

    /**
     * Returns the ship timestamp.
     *
     * @return \DateTime
     */
    public function getReadyAtTimestamp();

    /**
     * Returns the number of pieces
     *
     * @return int
     */
    public function getNumberOfPieces();

    /**
     * Returns the currency code.
     *
     * @return string
     */
    public function getCurrencyCode();

    /**
     * Returns the description.
     *
     * @return string
     */
    public function getDescription();

    /**
     * Returns the customs value.
     *
     * @return float
     */
    public function getCustomsValue();

    /**
     * Returns the service type.
     *
     * @return string
     */
    public function getServiceType();
    
    /**
     * Paperless Trade Enabled
     *
     * @return null|bool
     */
    public function getPaperlessTradeEnabled();
    
    /**
     * Document Images
     *
     * @return DocumentImages
     */
    public function getDocumentImages();
    
    /**
     * @param DocumentImages $documentImages
     *
     * @return self
     */
    public function setDocumentImages(DocumentImages $documentImages);
    
    /**
     * @return SpecialServices
     */
    public function getSpecialServices();
    
    /**
     * @param SpecialServices $specialServices
     *
     * @return self
     */
    public function setSpecialServices(SpecialServices $specialServices);
}
