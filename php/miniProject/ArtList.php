<?php

declare(strict_types=1);

include 'Art.php';

class ArtList
{
    private $artList;

    /**
     * @param $artList
     */
    public function __construct($artList)
    {
        $this->artList = $artList;
    }


    public function addArt(Art $art){

    }


    public function getArt(int $index): Art{
        return $this->artList[$index];
    }

    public function createArt(String $artUrlImage,String $artName,float $artPrice): Art{
        return new Art($artUrlImage,$artName,$artPrice);
    }

}