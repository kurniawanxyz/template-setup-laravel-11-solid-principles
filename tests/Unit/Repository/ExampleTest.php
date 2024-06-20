<?php

namespace Tests\Unit\Repository;

use App\Contracts\Interfaces\ExampleInterface;
use Exception;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic unit test example.
     */

     private ExampleInterface $example;
     public function __construct(
         ExampleInterface $example
     ) {
         $this->example = $example;
     }

    public function test_example(): void
    {
        $this->assertTrue(true);
        $this->test_get();
    }

    public function test_get()
    {
        try {
            $this->example->get();
            $this->assertTrue(true);
        } catch (Exception $th) {
            $this->assertTrue(false);
        }
    }
}
