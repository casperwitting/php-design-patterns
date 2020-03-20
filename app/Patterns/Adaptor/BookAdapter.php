<?php

namespace App\Patterns\Adapter;

class BookAdapter
{
    /**
     * @var SimpleBook
     */
    private $book;

    public function __construct(SimpleBook $book)
    {
        $this->book = $book;
    }

    public function getAuthorAndTitle(): string
    {
        return $this->book->getTitle() . ' by ' . $this->book->getAuthor();
    }
}
