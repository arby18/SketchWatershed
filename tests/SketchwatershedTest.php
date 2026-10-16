<?php
/**
 * Tests for SketchWatershed
 */

use PHPUnit\Framework\TestCase;
use Sketchwatershed\Sketchwatershed;

class SketchwatershedTest extends TestCase {
    private Sketchwatershed $instance;

    protected function setUp(): void {
        $this->instance = new Sketchwatershed(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Sketchwatershed::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
