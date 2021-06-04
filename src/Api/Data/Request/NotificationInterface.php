<?php


namespace Dhl\Express\Api\Data\Request;


interface NotificationInterface
{
    public function getNotificationMethod(): string;
    
    public function getEmailAddress(): string;
    
    public function getBespokeMessage(): string;
    
    public function getLanguageCode(): string;
}