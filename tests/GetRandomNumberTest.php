<?php

use PHPUnit\Framework\TestCase;

class GetRandomNumberTest extends TestCase
{
    public function testRandomNumber()
    {
        echo "\"What, why and how would you unit test a random function?\"\n";

        $result = getRandomNumber();

        if ($result !== "the answer") {
            $this->assertIsInt($result);
            $this->assertGreaterThanOrEqual(1, $result);
            $this->assertLessThanOrEqual(100, $result);
        }
    }

    public function testRandomNumberIsRandom()
    {
        $results = [];
        for ($i = 0; $i < 100; $i++) {
            $results[] = getRandomNumber();
        }

        $uniqueResults = array_unique($results);
        $this->assertGreaterThan(1, count($uniqueResults));
    }
}
