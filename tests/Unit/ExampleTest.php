<?php

namespace Tests\Unit;

use PharIo\Manifest\Email;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */

    public function testIfThatValueIsFalse(): void
    {
        $testValue = 45 - 45;
        $this->assertFalse(!!$testValue);
    }

    public function testIfThatValueIsEmpty(): void
    {
        $testValue = '';
        $this->assertEmpty($testValue);
    }

    public function testIfThatValuesIsEquals(): void
    {
        $primaryValue = 345;
        $secontTestValue = 345;

        $this->assertEquals($primaryValue, $secontTestValue);
    }
    
}
