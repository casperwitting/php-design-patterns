<?php

namespace App\Patterns\Adapter;

class BookAdapter
{
    /**
     * @var SimpleBook
     */
    private $book;

    function __construct(SimpleBook $book)
    {
        $this->book = $book;
    }

    function getAuthorAndTitle(): string
    {
        return $this->book->getTitle() . ' by ' . $this->book->getAuthor();
    }
}