<?php


namespace Dhl\Express\Model\Request;


use Dhl\Express\Api\Data\Request\NotificationInterface;

/**
 * Shipment Request Notification
 *
 * @author Lubos Odraska <odraska@slonline.sk>
 * @link   https://www.slonline.sk/
 */
class Notification implements NotificationInterface
{
    /**
     * The notification method to be sent.
     * Valid values; EMAIL
     * @var string
     */
    private $notificationMethod;
    
    /**
     * Email address of the party to receive email notification.
     * @var string
     */
    private $emailAddress;
    
    /**
     * Additional message to be added to the body of the mail
     * @var string
     */
    private $bespokeMessage;
    
    /**
     * LanguageCode used in the email content. The possible values are;
     * - eng, (Default)
     * - eng, British
     * - zho, Chinese Traditional - chi, Chinese Simplified
     * @var string
     */
    private $languageCode;
    
    public function __construct(
        string $notificationMethod,
        string $emailAddress,
        string $bespokeMessage = null,
        string $languageCode = null
    ) {
        $this->notificationMethod = $notificationMethod;
        $this->emailAddress       = $emailAddress;
        $this->bespokeMessage     = $bespokeMessage ?? '';
        $this->languageCode       = $languageCode ?? 'eng';
    }
    
    public function getNotificationMethod(): string
    {
        return $this->notificationMethod;
    }
    
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }
    
    public function getBespokeMessage(): string
    {
        return $this->bespokeMessage;
    }
    
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }
}