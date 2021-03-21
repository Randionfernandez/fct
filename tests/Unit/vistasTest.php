<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class vistasTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
        
        $response= $this->get('/');
        $response->asssertStatus(200);
    }
}
