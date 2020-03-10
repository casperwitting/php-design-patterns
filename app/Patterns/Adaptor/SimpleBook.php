<?php

namespace App\Patterns\Adapter;

class SimpleBook
{
    /**
     * @var string
     */
    private $author;
    /**
     * @var string
     */
    private $title;

    function __construct(string $author, string $title)
    {
        $this->author = $author;
        $this->title = $title;
    }

    function getAuthor(): string
    {
        return $this->author;
    }

    function getTitle(): string
    {
        return $this->title;
    }
}