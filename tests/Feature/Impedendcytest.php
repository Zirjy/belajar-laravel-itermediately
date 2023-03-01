<?php

namespace Tests\Feature;

use App\Data\Bar;
use App\Data\Foo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class Impedendcytest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testinpedencyinjection()
    {
        $food = new foo();
        $bar = new bar($food);
 
        assertEquals('fooand bar', $bar -> bar());
    }
}
