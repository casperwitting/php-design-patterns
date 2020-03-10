<?php

namespace App\Patterns\Adapter;

class SimpleBook
{
    private $author;
    private $title;

    function __construct($author, $title)
    {
        $this->author = $author;
        $this->title = $title;
    }

    function getAuthor()
    {
        return $this->author;
    }

    function getTitle()
    {
        return $this->title;
    }
}