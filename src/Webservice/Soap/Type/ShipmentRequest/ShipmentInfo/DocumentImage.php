<?php


namespace Dhl\Express\Webservice\Soap\Type\ShipmentRequest\ShipmentInfo;


class DocumentImage
{
    const FORMAT_PDF = 'PDF';
    const FORMAT_PNG = 'PNG';
    const FORMAT_TIFF = 'TIFF';
    const FORMAT_GIF = 'GIF';
    const FORMAT_JPEG = 'JPEG';
    /**
     * Invoice
     */
    const TYPE_INV = 'INV';
    /**
     * Proforma
     */
    const TYPE_PNV = 'PNV';
    /**
     * Certificate of Origin
     */
    const TYPE_COO = 'COO';
    /**
     * Nafta Certificate of Origin
     */
    const TYPE_NAF = 'NAF';
    /**
     * Commercial Invoice
     */
    const TYPE_CIN = 'CIN';
    /**
     * Custom Declaration
     */
    const TYPE_DCL = 'DCL';
    /**
     * Air Waybill and Waybill Document
     */
    const TYPE_AWB = 'AWB';
    /**
     * The type of document for the image provided
     * @var string
     */
    private $DocumentImageType;
    /**
     * The image of the document
     * @var null|string
     */
    private $DocumentImage;
    /**
     * @var string
     */
    private $DocumentImageFormat;

    public function __construct(string $type, string $data, string $format)
    {
        $this->DocumentImageType   = $type;
        $this->DocumentImage       = $data;
        $this->DocumentImageFormat = $format;
    }

    /**
     * @return string
     */
    public function getDocumentImageType(): string
    {
        return $this->DocumentImageType;
    }

    /**
     * @param string $DocumentImageType
     *
     * @return DocumentImage
     */
    public function setDocumentImageType(string $DocumentImageType): DocumentImage
    {
        $this->DocumentImageType = $DocumentImageType;
        
        return $this;
    }
    
    /**
     * @return string|null
     */
    public function getDocumentImage(): ?string
    {
        return $this->DocumentImage;
    }
    
    /**
     * @param string|null $DocumentImage
     *
     * @return DocumentImage
     */
    public function setDocumentImage(?string $DocumentImage): DocumentImage
    {
        $this->DocumentImage = $DocumentImage;
        
        return $this;
    }
    
    /**
     * @return string
     */
    public function getDocumentImageFormat(): string
    {
        return $this->DocumentImageFormat;
    }
    
    /**
     * @param string $DocumentImageFormat
     *
     * @return DocumentImage
     */
    public function setDocumentImageFormat(string $DocumentImageFormat): DocumentImage
    {
        $this->DocumentImageFormat = $DocumentImageFormat;
        
        return $this;
    }
}