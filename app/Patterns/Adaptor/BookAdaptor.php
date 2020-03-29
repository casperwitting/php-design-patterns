<?php

namespace App\Patterns\Adaptor;

class BookAdaptor
{
    /**
     * @var Book
     */
    private $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function getAuthorAndTitle(): string
    {
        return $this->book->getTitle() . ' by ' . $this->book->getAuthor();
    }
}
