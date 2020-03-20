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

    public function __construct(string $author, string $title)
    {
        $this->author = $author;
        $this->title = $title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
