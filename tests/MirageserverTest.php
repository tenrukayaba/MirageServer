<?php
/**
 * Tests for MirageServer
 */

use PHPUnit\Framework\TestCase;
use Mirageserver\Mirageserver;

class MirageserverTest extends TestCase {
    private Mirageserver $instance;

    protected function setUp(): void {
        $this->instance = new Mirageserver(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Mirageserver::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
