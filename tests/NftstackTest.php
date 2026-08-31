<?php
/**
 * Tests for NFTStack
 */

use PHPUnit\Framework\TestCase;
use Nftstack\Nftstack;

class NftstackTest extends TestCase {
    private Nftstack $instance;

    protected function setUp(): void {
        $this->instance = new Nftstack(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nftstack::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
