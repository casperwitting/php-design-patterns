<?php

namespace Tests\Unit;

use App\Patterns\Adapter\BookAdapter;
use App\Patterns\Adapter\SimpleBook;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testThis()
    {
        $book = new SimpleBook('Uncle Bob', 'Design Patterns');

        $bookAdapter = new BookAdapter($book);

        $this->assertEquals('Design Patterns by Uncle Bob', $bookAdapter->getAuthorAndTitle());
    }
}