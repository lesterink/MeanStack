<?php
/**
 * Tests for MeanStack
 */

use PHPUnit\Framework\TestCase;
use Meanstack\Meanstack;

class MeanstackTest extends TestCase {
    private Meanstack $instance;

    protected function setUp(): void {
        $this->instance = new Meanstack(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Meanstack::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
