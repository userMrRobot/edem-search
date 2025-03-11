<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\Search;


class SearchTest extends TestCase
{
    public function testValidExpressionWithCorrectBrackets()
    {
        $this->assertTrue(Search::search('8 * (6 - 1)'));
        $this->assertTrue(Search::search('(8 * (6 - 1))'));
        $this->assertTrue(Search::search('(8 * 6) - (6 - 1)'));
    }

    public function testExpressionWithIncorrectBrackets()
    {
        $this->assertFalse(Search::search('8 * (6 - 1'));
        $this->assertFalse(Search::search('8 * (6 - 1))'));
        $this->assertFalse(Search::search(')8 * (6 - 1('));
        $this->assertFalse(Search::search('((8 + 2)))'));
    }

    public function testEmptyExpression()
    {
        $this->assertTrue(Search::search(''));
    }
}