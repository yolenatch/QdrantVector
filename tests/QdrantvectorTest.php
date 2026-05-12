<?php
/**
 * Tests for QdrantVector
 */

use PHPUnit\Framework\TestCase;
use Qdrantvector\Qdrantvector;

class QdrantvectorTest extends TestCase {
    private Qdrantvector $instance;

    protected function setUp(): void {
        $this->instance = new Qdrantvector(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Qdrantvector::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
