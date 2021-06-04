<?php


namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentNotifications;

/**
 * Shipment Notification
 *
 * @author Lubos Odraska <odraska@slonline.sk>
 * @link   https://www.slonline.sk/
 */
class ShipmentNotification
{
    /**
     * The notification method to be sent. Valid values; EMAIL
     * @var string
     */
    private $NotificationMethod;
    /**
     * Email address of the party to receive email notification.
     * @var string
     */
    private $EmailAddress;
    /**
     * Additional message to be added to the body of the mail
     * @var null|string
     */
    private $BespokeMessage;
    /**
     * LanguageCode used in the email content. The possible values are;
     * @var null|string
     */
    private $LanguageCode;
    
    /**
     * ShipmentNotification constructor.
     *
     * @param string $NotificationMethod
     * @param string $EmailAddress
     * @param null|string $BespokeMessage
     * @param null|string $LanguageCode
     */
    public function __construct($NotificationMethod, $EmailAddress, $BespokeMessage, $LanguageCode)
    {
        $this->setNotificationMethod($NotificationMethod)
            ->setEmailAddress($EmailAddress)
            ->setBespokeMessage($BespokeMessage)
            ->setLanguageCode($LanguageCode);
    }
    
    /**
     * @return string
     */
    public function getNotificationMethod(): string
    {
        return $this->NotificationMethod;
    }
    
    /**
     * @param string $NotificationMethod
     *
     * @return ShipmentNotification
     */
    public function setNotificationMethod(string $NotificationMethod): ShipmentNotification
    {
        $this->NotificationMethod = $NotificationMethod;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->EmailAddress;
    }
    
    /**
     * @param string $EmailAddress
     *
     * @return ShipmentNotification
     */
    public function setEmailAddress(string $EmailAddress): ShipmentNotification
    {
        $this->EmailAddress = $EmailAddress;
        
        return $this;
    }
    
    /**
     * @return string|null
     */
    public function getBespokeMessage(): ?string
    {
        return $this->BespokeMessage;
    }
    
    /**
     * @param string|null $BespokeMessage
     *
     * @return ShipmentNotification
     */
    public function setBespokeMessage(?string $BespokeMessage): ShipmentNotification
    {
        $this->BespokeMessage = $BespokeMessage;
        
        return $this;
    }
    
    /**
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return empty($this->LanguageCode) ? null : $this->LanguageCode;
    }
    
    /**
     * @param string|null $LanguageCode
     *
     * @return ShipmentNotification
     */
    public function setLanguageCode(?string $LanguageCode): ShipmentNotification
    {
        $this->LanguageCode = $LanguageCode;
        
        return $this;
    }
}