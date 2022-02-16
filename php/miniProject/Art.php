<?php

declare(strict_types=1);

class Art
{
    private $artUrlImage;
    private $artName;
    private $artPrice;

    /**
     * @param $artUrlImage
     * @param $artName
     * @param $artPrice
     */
    public function __construct(String $artUrlImage,String $artName,float $artPrice)
    {
        $this->artUrlImage = $artUrlImage;
        $this->artName = $artName;
        $this->artPrice = $artPrice;
    }

    /**
     * @return mixed
     */
    public function getArtUrlImage()
    {
        return $this->artUrlImage;
    }

    /**
     * @param mixed $artUrlImage
     */
    public function setArtUrlImage($artUrlImage)
    {
        $this->artUrlImage = $artUrlImage;
    }

    /**
     * @return mixed
     */
    public function getArtName()
    {
        return $this->artName;
    }

    /**
     * @param mixed $artName
     */
    public function setArtName($artName)
    {
        $this->artName = $artName;
    }

    /**
     * @return mixed
     */
    public function getArtPrice()
    {
        return $this->artPrice;
    }

    /**
     * @param mixed $artPrice
     */
    public function setArtPrice($artPrice)
    {
        $this->artPrice = $artPrice;
    }

}