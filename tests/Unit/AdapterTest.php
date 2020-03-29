<?php

namespace Tests\Unit;

use App\Patterns\Adaptor\Book;
use App\Patterns\Adaptor\BookAdaptor;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testThis()
    {
        $book = new Book('Uncle Bob', 'Design Patterns');

        $bookAdapter = new BookAdaptor($book);

        $this->assertEquals('Design Patterns by Uncle Bob', $bookAdapter->getAuthorAndTitle());
    }
}
