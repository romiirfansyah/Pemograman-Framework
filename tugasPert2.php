<?php

class Product
{
    public $name;
    public $price;
    public $discount;

    function setPrice($newPrice)
    {
        $this->price = $newPrice;
    }

    function getPrice()
    {
        return $this->price;
    }

    function setName($newName)
    {
        $this->name = $newName;
    }

    function getName()
    {
        return $this->name;
    }

    function setDiscount($newDiscount)
    {
        $this->discount = $newDiscount;
    }

    function getDiscount()
    {
        return $this->discount;
    }
}


class CDMusic extends Product
{
    protected $artist;
    protected $genre;

    function setArtist($newArtist)
    {
        $this->artist = $newArtist;
    }

    function getArtist()
    {
        return $this->artist;
    }

    function setGenre($newGenre)
    {
        $this->genre = $newGenre;
    }

    function getGenre()
    {
        return $this->genre;
    }
}

class CDCabinet extends Product
{
    protected $capacity;
    protected $model;

    function setCapacity($newCapacity)
    {
        $this->capacity = $newCapacity;
    }

    function getCapacity()
    {
        return $this->capacity;
    }

    function setModel($newModel)
    {
        $this->model = $newModel;
    }

    function getModel()
    {
        return $this->model;
    }
};
