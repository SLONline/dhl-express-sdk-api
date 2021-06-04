<?php


namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo;


class DocumentImages
{
    /**
     * @var DocumentImage[]
     */
    private $DocumentImage;
    
    /**
     * DocumentImages constructor.
     *
     * @param DocumentImage[] $documentImages
     */
    public function __construct(array $documentImages)
    {
        $this->DocumentImage = $documentImages;
    }
    
    /**
     * @return DocumentImage[]
     */
    public function getDocumentImage(): array
    {
        return $this->DocumentImage;
    }
    
    /**
     * @param DocumentImage[] $DocumentImage
     *
     * @return DocumentImages
     */
    public function setDocumentImage(array $DocumentImage): DocumentImages
    {
        $this->DocumentImage = $DocumentImage;
        
        return $this;
    }
}