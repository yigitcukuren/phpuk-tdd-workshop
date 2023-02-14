<?php

namespace ADT;

use Braddle\PhpUk2023\ADT\Queue;
use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    private $empty;
    private $one;
    private $two;

    protected function setUp(): void
    {
        parent::setUp();
        // Empty
        $this->empty = new Queue();
        // One
        $this->one = new Queue();
        $this->one->add('one');
        // Two
        $this->two = new Queue();
        $this->two->add('one');
        $this->two->add('two');
    }

    public function testIsEmpty()
    {
        $this->assertTrue($this->empty->isEmpty());
    }

    public function testIsNotEmpty()
    {
        $this->empty->add('item');
        $this->assertFalse($this->empty->isEmpty());
    }

    public function testEmptyIsZero()
    {
        $this->assertEquals(0, $this->empty->size());
    }

    public function testCountOfOne()
    {
        $this->assertEquals(1, $this->one->size());
    }

    public function testCountOfTwo()
    {
        $this->assertEquals(2, $this->two->size());
    }

    public function testPollofEmpty()
    {
        $this->assertEquals(null, $this->empty->poll());
    }

    public function testPollofOne()
    {
        $this->assertEquals('one', $this->one->poll());
    }

    public function testPollofTwo()
    {
        $this->assertEquals('one', $this->two->poll());
        $this->assertEquals('two', $this->two->poll());
    }

    public function testPeekofEmpty()
    {
        $this->assertEquals(null, $this->empty->peek());
    }

    public function testPeekofOne()
    {
        $this->assertEquals('one', $this->one->peek());
    }

    public function testPeekofTwo()
    {
        $this->assertEquals('one', $this->two->peek());
    }

    public function testRemoveofEmpty()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('No such element exception');
        $this->empty->remove();
    }

    public function testRemoveofOne()
    {
        $this->assertEquals('one', $this->one->remove());
    }

    public function testRemoveofTwo()
    {
        $this->assertEquals('one', $this->two->remove());
        $this->assertEquals('two', $this->two->remove());
    }

    public function testElementofEmpty()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('No such element exception');
        $this->empty->element();
    }

    public function testElementofOne()
    {
        $this->assertEquals('one', $this->one->element());
    }

    public function testElementofTwo()
    {
        $this->assertEquals('one', $this->two->element());
    }
}
